@extends('layouts.frontend')
@section('content')



<body class="body">

  <!-- Navigation -->
  <!--nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="home.html">
        <img src="assets/images/logo.jpeg" width="50" height="50" class="me-2">SympTrack
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item ms-3"><a href="login.html" class="btn btn-primary">Login</a></li>
          <li class="nav-item ms-3"><a href="register.html" class="btn btn-primary">Get Started</a></li>
          <li class="nav-item ms-3"><a href="symptom-history.html" class="btn btn-primary">Symptom History</a></li>
          <li class="nav-item ms-3"><a href="dashboard.html" class="btn btn-primary">Dashboard</a></li>
        </ul>
        </div>
    </div>
</nav-->

        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand d-flex align-items-center" href="home.html">
                    <img src="{{ asset('backend/images/logo.jpeg') }}" width="50" height="50" class="me-2"> SympTrack
                </a>

                <!-- Toggler for mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar items -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center flex-wrap gap-2">
                      <li class="nav-item"><a href="/" class="btn btn-primary">Home</a></li>
                      <li class="nav-item"><a href="dashboard" class="btn btn-primary">Dashboard</a></li>
                    <li class="nav-item"><a href="symptom_history" class="btn btn-primary">Symptom History</a></li>
                </ul>
                </div>
            </div>
            <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
              <i class="bi bi-person-circle me-1"></i> <span id="userName">User</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="#" id="logoutBtn"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
            </ul>
          </li>
        </ul>
    </nav>
        

  <!-- Main Content -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card card-form border-0 shadow-sm">
          <div class="card-body p-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h2 class="mb-0">Add New Symptom</h2>
              <a href="dashboard" class="btn btn-outline-secondary" style="border-color: #2c3e50e6; color:black;">
                <i class="bi bi-arrow-left me-1"></i> Back to Dashboard
              </a> <br>
              <a href="personalInfo" class="btn btn-outline-secondary" style="border-color: #2c3e50e6; color:black;">
                <i class="bi bi-arrow-right me-1"></i> Back to Personal Info Form
              </a>
            </div>

            <!-- Symptom Form -->
            <form id="symptomForm" class="form">

              <!-- Symptom Name -->
              <div class="mb-4">
                <label for="symptomName" class="form-label">Symptom Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-lg" id="symptomName" required>
                <div class="form-text">Enter a descriptive name for your symptom</div>
              </div>

              <!-- Severity -->
              <div class="mb-4">
                <label class="form-label">Severity <span class="text-danger">*</span></label>
                <div class="d-flex align-items-center">
                  <input type="range" class="form-range flex-grow-1 me-3" id="severity" min="1" max="10" value="5" oninput="updateSeverityValue(this.value)">
                  <div class="severity-value-container">
                    <span class="badge bg-primary rounded-pill fs-5" id="severityValue">5</span>
                    <span class="ms-1">/ 10</span>
                  </div>
                </div>
                <div class="d-flex justify-content-between mt-1">
                  <small class="text-muted">Mild</small>
                  <small class="text-muted">Severe</small>
                </div>
              </div>

              <!-- Date & Time -->
              <div class="mb-4">
                <label for="symptomDate" class="form-label">Date & Time <span class="text-danger">*</span></label>
                <input type="datetime-local" class="form-control form-control-lg" id="symptomDate" required>
              </div>

              <!-- Notes -->
              <div class="mb-4">
                <label for="symptomNotes" class="form-label">Notes</label>
                <textarea class="form-control" id="symptomNotes" rows="4" placeholder="Any additional details..."></textarea>
                <div class="form-text">Optional: Include details like location, triggers, or other relevant information</div>
              </div>

              

              <!-- Associated Factors -->
              <div class="mb-4">
                <label class="form-label">Associated Factors</label>
                <div class="row g-2">
                  <div class="col-md-6">
                    <select class="form-select" id="symptomTrigger">
                      <option value="" selected disabled>Select a trigger (optional)</option>
                      <option value="stress">Stress</option>
                      <option value="diet">Diet</option>
                      <option value="lack_of_sleep">Lack of Sleep</option>
                      <option value="exercise">Exercise</option>
                      <option value="weather">Weather Changes</option>
                      <option value="medication">Medication</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="customTrigger" placeholder="Custom trigger" disabled>
                  </div>
                </div>
              </div>

              <!-- Duration -->
              <div class="mb-4">
                <label class="form-label">Duration</label>
                <div class="input-group">
                  <input type="number" class="form-control" id="durationValue" min="1" value="1">
                  <select class="form-select" id="durationUnit" style="max-width: 120px;">
                    <option value="minutes">Minutes</option>
                    <option value="hours" selected>Hours</option>
                    <option value="days">Days</option>
                  </select>
                </div>
              </div>

              <!-- Medication -->
              <div class="mb-4">
                <label class="form-label">Medication Taken (Optional)</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="medicationName" placeholder="Medication name">
                  <input type="text" class="form-control" id="medicationDosage" placeholder="Dosage" style="max-width: 120px;">
                </div>
              </div>

              <!-- Buttons -->
              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                <button style="color: black;" type="button" class="btn btn-outline-secondary me-md-2" onclick="resetForm()">
                  <i style="color: black;" class="bi bi-x-circle me-1"></i> Cancel
                </button>
                <button type="submit" class="btn btn-primary">
                  <i style="color: black;" class="bi bi-save me-1"></i>
                  <a style="color: black;" href="personalInfo"> Save Symptom </a>
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script>
    // Load user data
    const user = JSON.parse(localStorage.getItem('user')) || {};
    if (user.fullName) document.getElementById('userName').textContent = user.fullName;

    // Default date/time
    const now = new Date();
    document.getElementById('symptomDate').value = now.toISOString().slice(0, 16);

    // Trigger selection
    document.getElementById('symptomTrigger').addEventListener('change', function() {
      const customTrigger = document.getElementById('customTrigger');
      customTrigger.disabled = this.value !== 'other';
      if (this.value !== 'other') customTrigger.value = '';
    });

    // Form submission
    document.getElementById('symptomForm').addEventListener('submit', function(e) {
      e.preventDefault();
      saveSymptom();
    });

    // Logout
    document.getElementById('logoutBtn').addEventListener('click', function(e){
      e.preventDefault();
      localStorage.removeItem('isLoggedIn');
      window.location.href = 'index.html';
    });

    // Severity value update
    function updateSeverityValue(value) {
      document.getElementById('severityValue').textContent = value;
    }

    // Reset form
    function resetForm() {
      if(confirm('Are you sure you want to clear the form?')) {
        document.getElementById('symptomForm').reset();
        document.getElementById('severityValue').textContent = '5';
        document.getElementById('severity').value = '5';
        document.getElementById('symptomDate').value = new Date().toISOString().slice(0,16);
      }
    }

    // Save symptom
    function saveSymptom() {
      const symptom = {
        id: Date.now().toString(),
        name: document.getElementById('symptomName').value.trim(),
        severity: parseInt(document.getElementById('severity').value),
        date: document.getElementById('symptomDate').value,
        notes: document.getElementById('symptomNotes').value.trim(),
        trigger: document.getElementById('symptomTrigger').value === 'other' 
                 ? document.getElementById('customTrigger').value 
                 : document.getElementById('symptomTrigger').value,
        duration: `${document.getElementById('durationValue').value} ${document.getElementById('durationUnit').value}`,
        medication: document.getElementById('medicationName').value 
                  ? { name: document.getElementById('medicationName').value, dosage: document.getElementById('medicationDosage').value } 
                  : null,
        createdAt: new Date().toISOString()
      };

      if(!symptom.name || !symptom.date) {
        alert('Please fill in all required fields');
        return;
      }

      let symptoms = JSON.parse(localStorage.getItem('symptoms')) || [];
      symptoms.unshift(symptom);
      localStorage.setItem('symptoms', JSON.stringify(symptoms));

      alert('Symptom saved successfully!');
      window.location.href = 'dashboard.html';
    }
  </script>
</body>
</html>

@endsection