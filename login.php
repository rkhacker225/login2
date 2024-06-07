<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Your database password
$dbname = "userrk";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch and sanitize form data
$user = $_POST['username'];
$pass = md5($_POST['password']); // Use a more secure hash function like bcrypt in production

// Query to check user credentials
$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $user;
    header("Location: home.php");
} else {
    echo "<script>alert('Invalid username or password'); window.location.href='login.html';</script>";
}

$conn->close();
?>
