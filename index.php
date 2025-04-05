<?php
session_start();
$login_error = $_SESSION['login_error'] ?? null;
$register_error = $_SESSION['register_error'] ?? null;
$active_form = $_SESSION['active_form'] ?? 'login';

unset($_SESSION['login_error']);
unset($_SESSION['register_error']);
unset($_SESSION['active_form']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div id="loginForm" class="form-box <?php if($active_form == 'login') echo 'active'; ?>">
        <h2>Login</h2>
        <?php if ($login_error): ?><div class="error"><?php echo $login_error; ?></div><?php endif; ?>
        <form action="login_register.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button class="btn" type="submit" name="login">Login</button>
        </form>
        <p>Don't have an account? <a href="#" onclick="showForm('registerForm')">Register</a></p>
    </div>

    <div id="registerForm" class="form-box <?php if($active_form == 'register') echo 'active'; ?>">
        <h2>Register</h2>
        <?php if ($register_error): ?><div class="error"><?php echo $register_error; ?></div><?php endif; ?>
        <form action="login_register.php" method="post">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <button class="btn" type="submit" name="register">Register</button>
        </form>
        <p>Already have an account? <a href="#" onclick="showForm('loginForm')">Login</a></p>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
