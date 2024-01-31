<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Forgot Password | CodeLab</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
            Forgot Password
        </div>
        <p>Please enter your email address below. We will send you a link to reset your password.</p>
        <form action="reset-password.php" method="post">
            <div class="field">
                <input type="email" name="email" required>
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="submit" value="Reset Password">
            </div>
        </form>
    </div>
</body>
</html>
