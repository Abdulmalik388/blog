<!-- <?php
$host = "localhost";  // Database host (usually 'localhost')
$dbname = "blog_db";    // Your database name
$username = "root";   // Database username (default is 'root' in XAMPP)
$password = "";       // Database password (default is empty in XAMPP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?> -->
<!-- <?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?> -->
<?php
// db.php - Database connection
$host = 'localhost';
$db = 'blog_db'; // Replace with your database name
$user = 'root'; // Replace with your database username
$pass = ''; // Replace with your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
