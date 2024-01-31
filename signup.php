<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Signup | CodeLab</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
            Signup
        </div>
        <form action="signup-process.php" method="post">
            <div class="field">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="field">
                <input type="email" name="email" required>
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="field">
                <input type="password" name="confirm_password" required>
                <label>Confirm Password</label>
            </div>
            <div class="field">
                <input type="submit" value="Signup">
            </div>
        </form>
        <div class="signup-link">
            Already a member? <a href="login.php">Login now</a>
        </div>
    </div>
</body>
</html>
