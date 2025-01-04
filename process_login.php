<?php
session_start();
include 'db.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($username) || empty($password)) {
    header("Location: admin_login.php?error=Please fill in all fields.");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$stmt->execute(['username' => $username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header("Location: admin_dashboard.php");
    exit;
} else {
    header("Location: admin_login.php?error=Invalid username or password.");
    exit;
}
?>
