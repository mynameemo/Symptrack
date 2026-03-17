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
                      <li class="nav-item"><a href="add_symptom" class="btn btn-primary">Add Symptom</a></li>
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
              <h2 class="mb-0">Personal Info</h2>
              <a href="add_symptom" class="btn btn-outline-secondary" style="border-color: #2c3e50e6; color:black;">
                <i class="bi bi-arrow-left me-1"></i> Back to Add Symptom
              </a>
            </div>

            <!-- Symptom Form -->
            <form id="PersonalInfo" class="form">

              
              <!-- Age & Blood Group -->
              <div class="row g-3 mb-4">
                <div class="col-md-6">
                  <label for="age" class="form-label">Age</label>
                  <input type="number" class="form-control" id="age" required>
                </div>
                <div class="col-md-6">
                  <label for="bloodGroup" class="form-label">Blood Group</label>
                  <select class="form-select" id="bloodGroup" required>
                    <option value="">Select Blood Group</option>
                    <option value="a+">A+</option>
                    <option value="a-">A-</option>
                    <option value="b+">B+</option>
                    <option value="b-">B-</option>
                    <option value="ab+">AB+</option>
                    <option value="ab-">AB-</option>
                    <option value="o+">O+</option>
                    <option value="o-">O-</option>
                  </select>
                </div>
              </div>

              <!-- Diagnosed Conditions & Triggers -->
              <div class="mb-4">
                <label class="form-label">Diagnosed Medical Condition</label>
                <div class="row g-2">
                  <div class="col-md-6">
                    <select class="form-select" id="DiagnosedMedicalConditions">
                      <option value="" selected disabled>Select a Condition</option>
                      <option value="anemia">Anemia</option>
                      <option value="diabetes">Diabetes</option>
                      <option value="pneumonia">Pneumonia</option>
                      <option value="hypertension">HyperTension</option>
                      <option value="h-pylori">H-Pylori</option>
                      <option value="migraine">Migraine</option>
                      <option value="asthma">Asthma</option>
                      <option value="eczema">Eczema</option>
                      <option value="cancer">Cancer</option>                      
                      <option value="otherMedicalCondition">Other</option>
                      <option value="">None</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="otherMedicalCondition" placeholder="Other Medical Condition" disabled>
                  </div>
                </div>
              </div>

              <!-- Mental Condition -->
              <div class="mb-4">
                <label class="form-label">Diagnosed Mental Condition</label>
                <div class="row g-2">
                  <div class="col-md-6">
                    <select class="form-select" id="DiagnosedMentalConditions">
                      <option value="" selected disabled>Select a Condition</option>
                      <option value="anxiety">Anxiety</option>
                      <option value="depression">Depression</option>
                      <option value="OCD">OCD</option>
                      <option value="ADHD">ADHD</option>
                      <option value="autism">Autism</option>
                      <option value="schizophrenia">Schizophrenia</option>
                      <option value="bipolar">Bipolar</option>
                      <option value="anorexia">Anorexia</option>
                      <option value="bulimia">Bulimia</option>   
                      <option value="otherMentalCondition">Other</option>
                      <option value="">None</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="otherMentalCondition" placeholder="Other Mental Condition" disabled>
                  </div>
                </div>
              </div>

              <!-- Buttons -->
              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                <button style="color: black;" type="button" class="btn btn-outline-secondary me-md-2" onclick="resetForm()">
                  <i style="color: black;" class="bi bi-x-circle me-1"></i> Cancel
                </button>
                <button type="submit" class="btn btn-primary">
                  <i style="color: black;" class="bi bi-save me-1"></i>
                  <a style="color: black;" href="personalInfo"> Save Info </a>
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

  // Get form elements
  const medicalSelect = document.getElementById('DiagnosedMedicalConditions');
  const otherMedicalInput = document.getElementById('otherMedicalCondition');
  const mentalSelect = document.getElementById('DiagnosedMentalConditions');
  const otherMentalInput = document.getElementById('otherMentalCondition');
  const personalForm = document.getElementById('PersoalInfoForm');

  // Enable "Other Medical Condition" input
  medicalSelect.addEventListener('change', function() {
      if (this.value === 'otherMedicalCondition') {
          otherMedicalInput.disabled = false;
          otherMedicalInput.required = true;
          otherMedicalInput.focus();
      } else {
          otherMedicalInput.disabled = true;
          otherMedicalInput.required = false;
          otherMedicalInput.value = '';
      }
  });

  // Enable "Other Mental Condition" input
  mentalSelect.addEventListener('change', function() {
      if (this.value === 'otherMentalCondition') {
          otherMentalInput.disabled = false;
          otherMentalInput.required = true;
          otherMentalInput.focus();
      } else {
          otherMentalInput.disabled = true;
          otherMentalInput.required = false;
          otherMentalInput.value = '';
      }
  });

  // Form submission
  personalForm.addEventListener('submit', function(e) {
      e.preventDefault();

      // Collect form data
      const personalInfo = {
          age: document.getElementById('age').value,
          bloodGroup: document.getElementById('bloodGroup').value,
          medicalCondition: medicalSelect.value === 'otherMedicalCondition' 
                            ? otherMedicalInput.value 
                            : medicalSelect.value,
          mentalCondition: mentalSelect.value === 'otherMentalCondition'
                            ? otherMentalInput.value
                            : mentalSelect.value,
          updatedAt: new Date().toISOString()
      };

      // Basic validation
      if (!personalInfo.age || !personalInfo.bloodGroup) {
          alert('Please fill in all required fields');
          return;
      }

      // Save to localStorage
      localStorage.setItem('personalInfo', JSON.stringify(personalInfo));

      alert('Personal information saved successfully!');
      // Optionally redirect
      window.location.href = 'add_symptom';
  });

  // Reset form
  function resetForm() {
      if (confirm('Are you sure you want to clear the form?')) {
          personalForm.reset();
          otherMedicalInput.disabled = true;
          otherMedicalInput.required = false;
          otherMentalInput.disabled = true;
          otherMentalInput.required = false;
      }
  }

  // Logout
  document.getElementById('logoutBtn').addEventListener('click', function(e){
      e.preventDefault();
      localStorage.removeItem('isLoggedIn');
      window.location.href = 'index.html';
  });
</script>

</body>
</html>

@endsection