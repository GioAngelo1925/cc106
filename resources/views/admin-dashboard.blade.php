<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard - Pastor Dental Clinic</title>
    <!-- Add Bootstrap or your custom CSS here -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            padding-top: 1rem;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .navbar {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pastor Dental Clinic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Admin Dashboard Layout -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <a href="#">Dashboard</a>
                <a href="#">Manage Appointments</a>
                <a href="#">Manage Patients</a>
                <a href="#">Manage Staff</a>
                <a href="#">Reports</a>
                <a href="#">Settings</a>
            </div>

            <!-- Main Content -->
            <div class="col-md-10">
                <h2>Admin Dashboard</h2>
                <div class="row my-4">
                    <!-- Appointments Card -->
                    <div class="col-md-4">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-header">Appointments</div>
                            <div class="card-body">
                                <h5 class="card-title">20 Pending Appointments</h5>
                                <p class="card-text">View and manage upcoming appointments for patients.</p>
                                <a href="#" class="btn btn-light">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Patients Card -->
                    <div class="col-md-4">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-header">Patients</div>
                            <div class="card-body">
                                <h5 class="card-title">150 Registered Patients</h5>
                                <p class="card-text">View and manage patient records and profiles.</p>
                                <a href="#" class="btn btn-light">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Reports Card -->
                    <div class="col-md-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-header">Reports</div>
                            <div class="card-body">
                                <h5 class="card-title">Clinic Reports</h5>
                                <p class="card-text">Generate and review clinic performance reports.</p>
                                <a href="#" class="btn btn-light">View Reports</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activities Section -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>Recent Activities</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Activity</th>
                                    <th>User</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Appointment created</td>
                                    <td>Dr. Smith</td>
                                    <td>10 minutes ago</td>
                                </tr>
                                <tr>
                                    <td>New patient registered</td>
                                    <td>Receptionist</td>
                                    <td>30 minutes ago</td>
                                </tr>
                                <tr>
                                    <td>Clinic report generated</td>
                                    <td>Admin</td>
                                    <td>1 hour ago</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
