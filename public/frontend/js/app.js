// Check if user is logged in on protected pages
function checkAuth() {
    const protectedPages = ['dashboard.html', 'add-symptom.html', 'symptom-history.html'];
    const currentPage = window.location.pathname.split('/').pop();
    
    if (protectedPages.includes(currentPage)) {
        const isLoggedIn = localStorage.getItem('isLoggedIn');
        if (!isLoggedIn) {
            window.location.href = 'login.blade.php';
        }
    }
}

// Initialize the application
document.addEventListener('DOMContentLoaded', function() {
    checkAuth();
    
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Initialize popovers
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
});

// Format date to readable string
function formatDate(dateString) {
    const options = { 
        year: 'numeric', 
        month: 'short', 
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    };
    return new Date(dateString).toLocaleDateString('en-US', options);
}

// Generate a unique ID
function generateId() {
    return 'symptom_' + Date.now().toString(36) + Math.random().toString(36).substr(2, 9);
}

// Show toast notification
function showToast(message, type = 'success') {
    const toastContainer = document.getElementById('toastContainer');
    if (!toastContainer) return;
    
    const toastId = 'toast-' + Date.now();
    const toast = document.createElement('div');
    toast.id = toastId;
    toast.className = `toast align-items-center text-white bg-${type} border-0`;
    toast.setAttribute('role', 'alert');
    toast.setAttribute('aria-live', 'assertive');
    toast.setAttribute('aria-atomic', 'true');
    
    toast.innerHTML = `
        <div class="d-flex">
            <div class="toast-body">
                ${message}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    `;
    
    toastContainer.appendChild(toast);
    
    const bsToast = new bootstrap.Toast(toast, {
        autohide: true,
        delay: 3000
    });
    
    bsToast.show();
    
    // Remove toast from DOM after it's hidden
    toast.addEventListener('hidden.bs.toast', function() {
        toast.remove();
    });
}

// Add this to your login form submission handler
function handleLogin(email, password) {
    // In a real app, you would validate against a backend
    // For demo purposes, we'll just check if the fields are filled
    if (!email || !password) {
        showToast('Please fill in all fields', 'danger');
        return false;
    }
    
    // For demo, just set a flag in localStorage
    localStorage.setItem('isLoggedIn', 'true');
    localStorage.setItem('userEmail', email);
    
    // Redirect to dashboard
    window.location.href = 'home.blade.php';
    return true;
}

// Add this to your registration form submission handler
function handleRegistration(fullName, email, password) {
    // In a real app, you would validate and send to a backend
    // For demo purposes, we'll just check if the fields are filled
    if (!fullName || !email || !password) {
        showToast('Please fill in all fields', 'danger');
        return false;
    }
    
    // For demo, just store in localStorage
    const user = {
        fullName,
        email,
        password // In a real app, never store passwords in localStorage
    };
    
   
}

// Logout function
function logout() {
    localStorage.removeItem('isLoggedIn');
    window.location.href = 'welcome.blade.php';
}

// Add this to your add-symptom form submission handler
function saveSymptom(symptomData) {
    // Get existing symptoms or initialize empty array
    let symptoms = JSON.parse(localStorage.getItem('symptoms')) || [];
    
    // Add new symptom with generated ID and timestamp
    const newSymptom = {
        id: generateId(),
        ...symptomData,
        createdAt: new Date().toISOString()
    };
    
    // Add to beginning of array (most recent first)
    symptoms.unshift(newSymptom);
    
    // Save back to localStorage
    localStorage.setItem('symptoms', JSON.stringify(symptoms));
    
    // Show success message
    showToast('Symptom saved successfully');
    
    // Redirect to dashboard after a short delay
    setTimeout(() => {
        window.location.href = 'dashboard.blade.php';
    }, 1000);
    
    return true;
}

// Get symptoms with optional filters
function getSymptoms(filters = {}) {
    let symptoms = JSON.parse(localStorage.getItem('symptoms')) || [];
    
    // Apply filters if provided
    if (filters.symptom) {
        symptoms = symptoms.filter(s => s.name.toLowerCase().includes(filters.symptom.toLowerCase()));
    }
    
    if (filters.minSeverity) {
        symptoms = symptoms.filter(s => s.severity >= filters.minSeverity);
    }
    
    if (filters.maxSeverity) {
        symptoms = symptoms.filter(s => s.severity <= filters.maxSeverity);
    }
    
    if (filters.startDate) {
        symptoms = symptoms.filter(s => new Date(s.date) >= new Date(filters.startDate));
    }
    
    if (filters.endDate) {
        // Set to end of day
        const endDate = new Date(filters.endDate);
        endDate.setHours(23, 59, 59, 999);
        symptoms = symptoms.filter(s => new Date(s.date) <= endDate);
    }
    
    // Sort by date (newest first)
    return symptoms.sort((a, b) => new Date(b.date) - new Date(a.date));
}

// Get symptom statistics
function getSymptomStats() {
    const symptoms = JSON.parse(localStorage.getItem('symptoms')) || [];
    const today = new Date().toDateString();
    const oneWeekAgo = new Date();
    oneWeekAgo.setDate(oneWeekAgo.getDate() - 7);
    
    // Today's symptoms
    const todaySymptoms = symptoms.filter(symptom => {
        return new Date(symptom.date).toDateString() === today;
    });
    
    // This week's symptoms
    const weekSymptoms = symptoms.filter(symptom => {
        return new Date(symptom.date) >= oneWeekAgo;
    });
    
    // Average severity
    const avgSeverity = symptoms.length > 0 
        ? (symptoms.reduce((sum, symptom) => sum + parseInt(symptom.severity), 0) / symptoms.length).toFixed(1)
        : 0;
    
    // Symptom frequency
    const symptomFrequency = {};
    symptoms.forEach(symptom => {
        if (symptomFrequency[symptom.name]) {
            symptomFrequency[symptom.name]++;
        } else {
            symptomFrequency[symptom.name] = 1;
        }
    });
    
    // Most common symptom
    let mostCommonSymptom = 'None';
    let maxCount = 0;
    for (const [symptom, count] of Object.entries(symptomFrequency)) {
        if (count > maxCount) {
            mostCommonSymptom = symptom;
            maxCount = count;
        }
    }
    
    return {
        totalSymptoms: symptoms.length,
        todaySymptoms: todaySymptoms.length,
        weekSymptoms: weekSymptoms.length,
        avgSeverity: parseFloat(avgSeverity),
        mostCommonSymptom: {
            name: mostCommonSymptom,
            count: maxCount
        },
        symptomFrequency
    };
}

// Generate chart data for symptoms
function generateChartData(symptoms, period = 'week') {
    // In a real app, you would generate actual chart data based on the selected period
    // For demo purposes, we'll return some sample data
    
    if (period === 'week') {
        const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        const today = new Date();
        const dayOfWeek = today.getDay(); // 0 = Sunday, 1 = Monday, etc.
        
        // Generate data for the past 7 days
        return {
            labels: Array.from({ length: 7 }, (_, i) => {
                const date = new Date(today);
                date.setDate(today.getDate() - (dayOfWeek - i + 7) % 7);
                return days[date.getDay()];
            }),
            datasets: [{
                label: 'Symptom Severity',
                data: Array.from({ length: 7 }, () => Math.floor(Math.random() * 5) + 3), // Random data for demo
                borderColor: '#4361ee',
                backgroundColor: 'rgba(67, 97, 238, 0.1)',
                borderWidth: 2,
                tension: 0.3,
                fill: true
            }]
        };
    } else if (period === 'month') {
        // Generate data for the past 30 days
        return {
            labels: Array.from({ length: 30 }, (_, i) => {
                const date = new Date();
                date.setDate(date.getDate() - (29 - i));
                return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric' });
            }),
            datasets: [{
                label: 'Symptom Severity',
                data: Array.from({ length: 30 }, () => Math.floor(Math.random() * 5) + 3), // Random data for demo
                borderColor: '#4361ee',
                backgroundColor: 'rgba(67, 97, 238, 0.1)',
                borderWidth: 2,
                tension: 0.3,
                fill: true
            }]
        };
    } else {
        // Yearly data
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        return {
            labels: months,
            datasets: [{
                label: 'Symptom Severity',
                data: months.map(() => Math.floor(Math.random() * 5) + 3), // Random data for demo
                borderColor: '#4361ee',
                backgroundColor: 'rgba(67, 97, 238, 0.1)',
                borderWidth: 2,
                tension: 0.3,
                fill: true
            }]
        };
    }
}

// Initialize charts on dashboard
function initializeDashboardCharts() {
    const ctx1 = document.getElementById('symptomTrendChart');
    const ctx2 = document.getElementById('symptomDistributionChart');
    
    if (!ctx1 || !ctx2) return;
    
    // Sample data for the trend chart
    const trendData = generateChartData([], 'week');
    
    // Trend chart
    new Chart(ctx1, {
        type: 'line',
        data: trendData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 10,
                    ticks: {
                        stepSize: 2
                    }
                }
            }
        }
    });
    
    // Sample data for the distribution chart
    const distributionData = {
        labels: ['Headache', 'Fatigue', 'Nausea', 'Dizziness', 'Other'],
        datasets: [{
            data: [30, 25, 15, 20, 10],
            backgroundColor: [
                '#4361ee',
                '#3f37c9',
                '#4cc9f0',
                '#4895ef',
                '#3a0ca3'
            ],
            borderWidth: 0
        }]
    };
    
    // Distribution chart
    new Chart(ctx2, {
        type: 'doughnut',
        data: distributionData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            },
            cutout: '70%'
        }
    });
}

// Call this when the dashboard loads
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('dashboardPage')) {
        initializeDashboardCharts();
        updateDashboardStats();
    }
});

// Update dashboard statistics
function updateDashboardStats() {
    const stats = getSymptomStats();
    
    // Update the stats cards
    document.getElementById('todaySymptoms').textContent = stats.todaySymptoms;
    document.getElementById('weekSymptoms').textContent = stats.weekSymptoms;
    document.getElementById('avgSeverity').textContent = stats.avgSeverity.toFixed(1);
    
    // Update recent symptoms
    const recentSymptoms = getSymptoms().slice(0, 5);
    const recentSymptomsContainer = document.getElementById('recentSymptoms');
    
    if (recentSymptoms.length === 0) {
        recentSymptomsContainer.innerHTML = `
            <tr>
                <td colspan="5" class="text-center py-4">
                    <div class="text-muted">
                        <i class="bi bi-clipboard2-pulse fs-1 d-block mb-2"></i>
                        <p class="mb-0">No symptoms logged yet.</p>
                        <a href="add-symptom.html" class="btn btn-sm btn-primary mt-2">Add Your First Symptom</a>
                    </div>
                </td>
            </tr>
        `;
    } else {
        recentSymptomsContainer.innerHTML = recentSymptoms.map(symptom => `
            <tr>
                <td>${formatDate(symptom.date)}</td>
                <td>${symptom.name}</td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="severity-indicator severity-${Math.ceil(symptom.severity / 2)}"></div>
                        ${symptom.severity}/10
                    </div>
                </td>
                <td>${symptom.notes || '-'}</td>
                <td>
                    <button class="btn btn-sm btn-outline-primary" onclick="editSymptom('${symptom.id}')">
                        <i class="bi bi-pencil"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-danger" onclick="deleteSymptom('${symptom.id}')">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
        `).join('');
    }
}

// Edit symptom (placeholder function)
function editSymptom(id) {
    // In a real app, this would navigate to an edit page or open a modal
    // For now, we'll just show an alert
    alert('Edit symptom with ID: ' + id);
}

// Delete symptom
function deleteSymptom(id) {
    if (confirm('Are you sure you want to delete this symptom?')) {
        let symptoms = JSON.parse(localStorage.getItem('symptoms')) || [];
        symptoms = symptoms.filter(symptom => symptom.id !== id);
        localStorage.setItem('symptoms', JSON.stringify(symptoms));
        
        // If on the dashboard, update the UI
        if (document.getElementById('dashboardPage')) {
            updateDashboardStats();
        }
        // If on the symptoms page, reload the table
        else if (typeof symptomsTable !== 'undefined') {
            symptomsTable.ajax.reload();
        }
        
        showToast('Symptom deleted successfully');
    }
}

// Add this to your script to handle logout button clicks
document.addEventListener('click', function(e) {
    if (e.target.id === 'logoutBtn' || e.target.closest('#logoutBtn')) {
        e.preventDefault();
        logout();
    }
});

 // Check if user is logged in
          

            // Load user data
            const user = JSON.parse(localStorage.getItem('user')) || {};
            if (user.fullName) {
                document.getElementById('userName').textContent = user.fullName;
                document.getElementById('welcomeMessage').textContent = `Welcome back, ${user.fullName.split(' ')[0]}`;
            }

            // Load symptoms data
            let symptoms = JSON.parse(localStorage.getItem('symptoms')) || [];
            
            // Filter today's symptoms
            const today = new Date().toDateString();
            const todaySymptoms = symptoms.filter(symptom => {
                return new Date(symptom.date).toDateString() === today;
            });
            
            // Update stats
            document.getElementById('todaySymptoms').textContent = todaySymptoms.length;
            
            // Filter this week's symptoms
            const oneWeekAgo = new Date();
            oneWeekAgo.setDate(oneWeekAgo.getDate() - 7);
            const weekSymptoms = symptoms.filter(symptom => {
                return new Date(symptom.date) >= oneWeekAgo;
            });
            document.getElementById('weekSymptoms').textContent = weekSymptoms.length;
            
            // Calculate average severity
            const avgSeverity = symptoms.length > 0 
                ? (symptoms.reduce((sum, symptom) => sum + parseInt(symptom.severity), 0) / symptoms.length).toFixed(1)
                : 0;
            document.getElementById('avgSeverity').textContent = avgSeverity;
            
            // Sort symptoms by date (newest first)
            symptoms.sort((a, b) => new Date(b.date) - new Date(a.date));
            
            // Display recent symptoms
            const recentSymptoms = symptoms.slice(0, 5);
            const recentSymptomsContainer = document.getElementById('recentSymptoms');
            
            if (recentSymptoms.length === 0) {
                recentSymptomsContainer.innerHTML = `
                    <tr>
                        <td colspan="5" class="text-center py-4">
                            <div class="text-muted">
                                <i class="bi bi-clipboard2-pulse fs-1 d-block mb-2"></i>
                                <p class="mb-0">No symptoms logged yet.</p>
                                <a href="add-symptom.html" class="btn btn-sm btn-primary mt-2">Add Your First Symptom</a>
                            </div>
                        </td>
                    </tr>
                `;
            } else {
                recentSymptomsContainer.innerHTML = recentSymptoms.map(symptom => `
                    <tr>
                        <td>${new Date(symptom.date).toLocaleDateString()}</td>
                        <td>${symptom.name}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="severity-indicator severity-${Math.ceil(symptom.severity / 2)}"></div>
                                ${symptom.severity}/10
                            </div>
                        </td>
                        <td>${symptom.notes || '-'}</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" onclick="editSymptom('${symptom.id}')">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteSymptom('${symptom.id}')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                `).join('');
            }

            // Initialize charts
            initializeCharts(symptoms);
        ;

        // Logout function
        document.getElementById('logoutBtn').addEventListener('click', function(e) {
            e.preventDefault();
            localStorage.removeItem('isLoggedIn');
            window.location.href = 'index.html';
        });

        // Initialize charts
        function initializeCharts(symptoms) {
            // Sample data - in a real app, this would come from your data
            const labels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
            const data = [3, 5, 2, 4, 6, 3, 2];
            
            // Symptom Trend Chart
            const trendCtx = document.getElementById('symptomTrendChart').getContext('2d');
            new Chart(trendCtx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Symptom Severity',
                        data: data,
                        borderColor: '#4361ee',
                        backgroundColor: 'rgba(67, 97, 238, 0.1)',
                        borderWidth: 2,
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 10,
                            ticks: {
                                stepSize: 2
                            }
                        }
                    }
                }
            });

            // Symptom Distribution Chart
            const distCtx = document.getElementById('symptomDistributionChart').getContext('2d');
            new Chart(distCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Headache', 'Fatigue', 'Nausea', 'Dizziness', 'Other'],
                    datasets: [{
                        data: [30, 25, 15, 20, 10],
                        backgroundColor: [
                            '#4361ee',
                            '#3f37c9',
                            '#4cc9f0',
                            '#4895ef',
                            '#3a0ca3'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    },
                    cutout: '70%'
                }
            });
        }

        // Edit symptom
        function editSymptom(id) {
            // In a real app, this would navigate to an edit page or open a modal
            // For now, we'll just show an alert
            alert('Edit symptom with ID: ' + id);
        }

        // Delete symptom
        function deleteSymptom(id) {
            if (confirm('Are you sure you want to delete this symptom?')) {
                let symptoms = JSON.parse(localStorage.getItem('symptoms')) || [];
                symptoms = symptoms.filter(symptom => symptom.id !== id);
                localStorage.setItem('symptoms', JSON.stringify(symptoms));
                window.location.reload();
            }
        }

        // Toggle password visibility
        function togglePassword(inputId, buttonId) {
            const password = document.getElementById(inputId);
            const icon = document.querySelector(`#${buttonId} i`);
            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        }

        document.getElementById('togglePassword').addEventListener('click', () => togglePassword('password', 'togglePassword'));
        document.getElementById('toggleConfirmPassword').addEventListener('click', () => togglePassword('confirmPassword', 'toggleConfirmPassword'));

        // Check password match
        document.getElementById('confirmPassword').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            const matchText = document.getElementById('passwordMatch');
            
            if (confirmPassword === '') {
                matchText.textContent = '';
                matchText.className = 'form-text';
            } else if (password === confirmPassword) {
                matchText.textContent = 'Passwords match!';
                matchText.className = 'form-text text-success';
            } else {
                matchText.textContent = 'Passwords do not match!';
                matchText.className = 'form-text text-danger';
            }
        });

        // Handle form submission
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const terms = document.getElementById('terms').checked;
            
            // Validation
            if (!fullName || !email || !password || !confirmPassword) {
                alert('Please fill in all fields');
                return;
            }
            
            if (password !== confirmPassword) {
                alert('Passwords do not match');
                return;
            }
            
            if (!terms) {
                alert('You must agree to the terms and conditions');
                return;
            }
            
            // For demo purposes, store user data in localStorage
            const user = {
                fullName,
                email,
                password // In a real app, never store passwords in localStorage
            };
            
            // Save user data
            localStorage.setItem('user', JSON.stringify(user));
            localStorage.setItem('isLoggedIn', 'true');
            
            // Show success message
            alert('Registration successful! Redirecting to dashboard...');
            
            // Redirect to dashboard
            window.location.href = 'dashboard.blade.php';
        });

        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const password = document.getElementById('password');
            const icon = this.querySelector('i');
            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        });


         // Add smooth scrolling to all links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Add active class to current nav item
        const currentLocation = location.href;
        const menuItems = document.querySelectorAll('.nav-link');
        const menuLength = menuItems.length;
        
        for (let i = 0; i < menuLength; i++) {
            if (menuItems[i].href === currentLocation) {
                menuItems[i].classList.add('active');
            }
        }
        
        // Animate stats counter
        function animateValue(obj, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                obj.textContent = value.toLocaleString();
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        // Start counter when stats section is in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = document.querySelectorAll('.stat-number');
                    statNumbers.forEach(stat => {
                        const target = parseInt(stat.getAttribute('data-count'));
                        animateValue(stat, 0, target, 2000);
                    });
                    observer.disconnect();
                }
            });
        }, { threshold: 0.5 });

        observer.observe(document.querySelector('.stats-counter'));

        