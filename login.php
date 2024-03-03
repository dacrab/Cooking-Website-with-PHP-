<?php
$page = ''; // Set the current page for navigation highlighting, change accordingly for each file
include 'navigation.php'; // Include navigation
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php echo $page ? ucfirst($page) : 'CodeLab'; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
            Login Form
        </div>
        <form action="login-process.php" method="post">
            <div class="field">
                <input type="text" name="email" required>
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <div class="pass-link">
                    <a href="forgot-password.php">Forgot password?</a>
                </div>
            </div>
            <div class="field">
                <input type="submit" value="Login">
            </div>
            <div class="signup-link">
                Not a member? <a href="signup.php">Signup now</a>
            </div>
        </form>
    </div>
</body>
</html>
