<?php
session_start();

// Hardcoded credentials (replace with database in production)
$admin_username = "101";
$admin_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate credentials
    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: admin.php");
        exit;
    } else {
        // Redirect back to login with error
        header("Location: Login.html?error=Invalid credentials");
        exit;
    }
}
?>