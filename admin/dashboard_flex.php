<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Movie Recommendation System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- External CSS -->
    <link rel="stylesheet" href="../public/css/admin.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4><a class="navbar-brand" href="dashboard.php">Admin Dashboard</a></h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#users">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#movies">Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#insert">Insert</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashboard.php">Dashboard</a>
                <div class="d-flex">
                    <span class="navbar-text me-3">Welcome, <strong>Admin</strong></span>
                    <a class="btn btn-outline-light" href="../process/logout.php">Logout</a>
                </div>
            </div>
        </nav>

        <!-- Main Sections -->

    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
