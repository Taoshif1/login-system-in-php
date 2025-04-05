<?php

session_start();
if(!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <h1>Welcome to the Admin Page</h1>
        <p>Hello, <?php echo $_SESSION['name']; ?>!</p>
        <p>Your email: <?php echo $_SESSION['email']; ?></p>
        <a href="logout.php" class="btn" onclick="window.location.href='logout'" >Logout</a>
        <a href="index.php" class="btn">Back to Home</a>
    </div>
</body>
</html>