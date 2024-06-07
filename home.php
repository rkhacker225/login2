<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="home-container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
