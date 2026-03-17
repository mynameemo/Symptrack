@extends('layouts.frontend')
@section('content')


<body>

    

    <!-- Hero Section -->
    <!--div class="register-hero">
        <div class="container text-center">
            <h1 class="display-5 fw-bold mb-3">Join SympTrack Today</h1>
            <p class="lead mb-0">Start tracking your health journey with ease</p>
        </div>
    </div-->

    <!-- Register Form -->
    <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card register-card">
                    <div class="card-body p-4 p-md-5" style="background: linear-gradient( #05aa58, #0573aa, #72036b)">
                        <div class="text-center mb-4">
                            <h2 class="h3 fw-bold mb-2">Create Your Account</h2>
                            <p class="text-muted">Fill in the details below to get started</p>
                        </div>
                        
                        <form method="POST" action="{{ route('register') }}" id="registerForm" class="needs-validation" novalidate>
                         @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Enter your email" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                        <input type="tel" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" placeholder="Enter your phone number" required>
                                        @error('phonenumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender" required>
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                        <option value="prefer-not-to-say">Prefer not to say</option>
                                    </select>
                                </div>
                            </div>
                            
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-pin"></i></span>
                                        <input type="tel" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Enter your address" required>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Create a password" minlength="6" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                    <div class="form-text">Must be at least 6 characters long</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                        <input type="password" class="form-control"  name="password_confirmation" placeholder="Confirm your password" required>
                                        <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                    <div id="passwordMatch" class="form-text"></div>
                                </div>
                            </div>
                            
                            <!--div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> <b>Role</b></label>
                                    <div class="col-sm-9">
                                        <input type="role" class="form-control" placeholder="{{ Auth::user()->role ?? 'NA' }}">  
                                    </div>
                                </div-->
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree to the <a href="#" class="text-decoration-none">Terms of Service</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>
                                </label>
                                <div class="invalid-feedback">
                                    You must agree to the terms and conditions
                                </div>
                            </div>
                            
                            <div class="d-grid gap-2 mb-4">
                                <button type="submit" class="btn btn-primary btn-lg py-2">
                                    Create Account <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </div>
                            
                            <div class="text-center pt-3 border-top">
                                <p class="mb-0">Already have an account? <a href="login" class="fw-semibold text-decoration-none">Sign in</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        // Toggle password visibility
        function setupPasswordToggle(inputId, buttonId) {
            const toggleButton = document.getElementById(buttonId);
            if (!toggleButton) return;
            
            toggleButton.addEventListener('click', function() {
                const passwordInput = document.getElementById(inputId);
                const icon = this.querySelector('i');
                
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                }
            });
        }
        
        // Setup password toggles
        setupPasswordToggle('password', 'togglePassword');
        setupPasswordToggle('confirmPassword', 'toggleConfirmPassword');
        
        // Password match validation
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');
        const passwordMatch = document.getElementById('passwordMatch');
        
        function validatePassword() {
            if (!password || !confirmPassword) return;
            if (password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity("Passwords don't match");
                passwordMatch.textContent = "Passwords don't match";
                passwordMatch.style.color = '#dc3545';
            } else {
                confirmPassword.setCustomValidity('');
                passwordMatch.textContent = 'Passwords match';
                passwordMatch.style.color = '#198754';
            }
        }
        
        if (password && confirmPassword) {
            password.addEventListener('change', validatePassword);
            confirmPassword.addEventListener('keyup', validatePassword);
        }
        
        // Form validation
        (function() {
            'use strict';
            
            // Fetch the form we want to apply custom Bootstrap validation styles to
            const form = document.getElementById('registerForm');
            if (!form) return;
            
            // Prevent form submission if it's invalid
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }  
                form.classList.add('was-validated');
            });
        })();
    </script>
    <!-- Custom JS -->
    <script src="assets/frontend/js/app.js"></script>
</body>
</html>

@endsection