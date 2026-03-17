@extends('layouts.frontend')
@section('content')


<body>
   
    <!-- Login Form -->
    <div class="container mb-5" style="margin-top: 130px;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card login-card" style="background: linear-gradient( #05aa58, #0573aa, #72036b)">
                    <div class="card-body p-4 p-md-5">

                        <div class="text-center mb-4">
                            <h2 class="h3 fw-bold mb-2">Sign In</h2>
                            <p class="text-muted">Enter your credentials to access your account</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="mb-4">
                                <label class="form-label">Email address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label">Remember me</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2">Sign In</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.getElementById('loginForm').onsubmit = function(e) {
    e.preventDefault();
    
    if (!this.checkValidity()) {
        e.stopPropagation();
        this.classList.add('was-validated');
        return;
    }

    // Get input values
    const email = this.querySelector('input[type="email"]').value.trim();
    const password = document.getElementById('password').value.trim();

    // Basic login logic (replace with your real auth)

    </script>
</body>
</html>

@endsection