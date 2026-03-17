@extends('layouts.frontend')
@section('content')


<body class="body">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"> <img src="{{ asset('backend/images/logo.jpeg') }}" width="50" height="50">SympTrack</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center flex-wrap gap-2">
                    <li class="nav-item"><a href="/" class="btn btn-primary">Home</a></li>
                    <li class="nav-item"><a href="add_symptom" class="btn btn-primary">Add Symptom</a></li>
                    <li class="nav-item"><a href="symptom_history" class="btn btn-primary">Symptom History</a></li>
                </ul>
                
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i> <span id="userName">User</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('home') }}"><i class="bi bi-person me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                        </ul>    
                    </li>
                    <button type="submit" class="btn btn-danger"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
                    <!--li class="nav-item"><a href="register" class="btn btn-danger"> Logout </a> </li-->
                    <!--button type="submit" class="form-control"> Logout </button-->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container py-5">
        <div class="mb-5"></div> <!-- Extra spacing after navbar -->
        <!-- Welcome Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="mb-1" id="welcomeMessage">Welcome back, User</h2>
                                <p class="text-muted mb-0">Here's what's happening with your health today.</p>
                            </div>
                            <a href="add_symptom" class="btn btn-primary">
                                <i class="bi bi-plus-circle me-1"></i> Add Symptom
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm dashboard-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text">Today's Symptoms</h6>
                                <h3 class="mb-0" id="todaySymptoms">0</h3>
                            </div>
                            <!--div class="bg-primary bg-opacity-10 p-3 rounded-3">
                                <i class="bi bi-clipboard2-pulse fs-3 text-primary"></i>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm dashboard-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text">This Week</h6>
                                <h3 class="mb-0" id="weekSymptoms">0</h3>
                            </div>
                            <!--div class="bg-success bg-opacity-10 p-3 rounded-3">
                                <i class="bi bi-calendar-week fs-3 text-success"></i>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm dashboard-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text">Average Severity</h6>
                                <h3 class="mb-0" id="avgSeverity">0.0</h3>
                            </div>
                            <!--div class="bg-warning bg-opacity-10 p-3 rounded-3">
                                <i class="bi bi-graph-up fs-3 text-warning"></i>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <!--div class="row g-4">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="card-title mb-0">Symptom Trend</h5>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-outline-secondary active" data-period="week">Week</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-period="month">Month</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-period="year">Year</button>
                            </div>
                        </div>
                        <canvas id="symptomTrendChart" height="10px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Symptom Distribution</h5>
                        <canvas id="symptomDistributionChart" height="10px"></canvas>
                    </div>
                </div>
            </div>
        </div-->

        <!--Recent Symptoms -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="card-title mb-0">Recent Symptoms</h5>
                            <a href="symptom-history.html" class="btn btn-sm btn-outline-primary" style="color: rgba(0, 0, 0, 0.727);">View All</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Symptom</th>
                                        <th>Severity</th>
                                        <th>Notes</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="recentSymptoms">
                                    <!-- Will be populated by JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
</body>
</html>

@endsection