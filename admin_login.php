<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Login</title>
    <style>
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .login-card {
            padding: 20px;
            max-width: 400px;
            width: 100%;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <?php
    include("include/navbar.php");
    ?>
    <div class="login-container">
        <div class="login-card">
            <h3 class="text-center">Admin Login</h3>
            <form action="process_login.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <?php
            if (isset($_GET['error'])) {
                echo "<p class='text-danger mt-3'>{$_GET['error']}</p>";
            }
            ?>
        </div>
    </div>
    <?php
    include("include/footer.php");
    ?>
</body>
</html>
