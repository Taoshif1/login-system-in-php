<?php

session_start();
if(!isset($_SESSION['name'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <h1>Welcome to the User Page</h1>
        <p>Hello,<span> <?php echo $_SESSION['name']; ?>!</span></p>
        <p>Your email: <span> <?php echo $_SESSION['email']; ?></span></p>
        <a href="logout.php" class="btn">Logout</a>
        <a href="index.php" class="btn">Back to Home</a>
    </div>
</body>
</html>