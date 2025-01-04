<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: admin_login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
            position: fixed;
            width: 250px;
            color: #fff;
        }
        .sidebar a {
            color: #ddd;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .sidebar .active {
            background-color: #007bff;
        }
        .main-content {
            margin-left: 260px;
            padding: 20px;
        }
        .card-title i {
            font-size: 24px;
        }
        .logout-btn {
            position: absolute;
            bottom: 20px;
            left: 20px;
            width: calc(100% - 40px);
        }
        @media (max-width: 768px){
            .body{
                display: none;
            }
          
        }
        @media (min-width: 1000px){
            .str{
                display: none;
            }
           
        @media (min-width: 1200px){
        .str{
            display: none;
        }
        }
    </style>
</head>
<body>
    <strong class="text-danger str">GO AND OPEN IT ON YOUR LAPTOP!!!</strong>
    <!-- Sidebar -->
     <div class="body">
    <div class="sidebar">
        <h3 class="text-center">Admin Panel</h3>
        <a href="#" class="active"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
        <a href="#"><i class="fas fa-users me-2"></i>Users</a>
        <a href="#"><i class="fas fa-edit me-2"></i>Manage Posts</a>
        <a href="reviews-table.php"><i class="fas fa-comments me-2"></i>Reviews</a>
        <a href="#"><i class="fas fa-cogs me-2"></i>Settings</a>
        <a href="admin_dashboard.php#analytics"><i class="fas fa-chart-line me-2"></i>Analytics</a>
        <a href="lettaalk_taable.php"><i class="fa-solid fa-table"></i></i>let's Talk Table</a>
        <a href="admin_login.php"><button  class="btn btn-danger logout-btn">Logout</button></a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Welcome, Admin!</h1>
        <p class="text-muted">Here's an overview of your website.</p>

        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-users"></i> Users
                        </h5>
                        <p class="card-text">Total Registered: 120</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-edit"></i> Posts
                        </h5>
                        <p class="card-text">Total Posts: 45</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-comments"></i> Reviews
                        </h5>
                        <p class="card-text">Total Reviews: 200</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Chart Section -->
            <div class="col-md-12 " id="analytics">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fas fa-chart-pie"></i> Analytics</h5>
                    </div>
                    <div class="card-body">
                    <div class="card mt-4">
    <div class="card-header">
        <h5 class="card-title"><i class="fas fa-chart-bar"></i> Website Activity</h5>
    </div>
    <div class="card-body">
        <canvas id="activityChart"></canvas>
    </div>
</div>

<script>
    // Get the chart canvas
    const ctx = document.getElementById('activityChart').getContext('2d');

    // Chart data
    const data = {
        labels: ['Posts', 'Comments', 'Users'],
        datasets: [{
            label: 'Activity Overview',
            data: [45, 200, 120], // Replace with your dynamic data
            backgroundColor: [
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    };

    // Chart configuration
    const config = {
        type: 'bar', // Change to 'line', 'pie', or 'doughnut' for other chart types
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // Render the chart
    const activityChart = new Chart(ctx, config);
</script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
