<?php
session_start();
$resetCode = '123456'; // You should generate this dynamically and email it
$emailSent = false;
$resetSuccess = false;
$error = '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['code-verify'])) {
        $email = $_POST['email'];
        $enteredCode = $_POST['code-verify'];
        $newPass = $_POST['newpassword'];
        $confirmPass = $_POST['confirm-pass'];

        if ($enteredCode !== $resetCode) {
            $error = "Invalid verification code.";
        } elseif ($newPass !== $confirmPass) {
            $error = "Passwords do not match.";
        } else {
            $resetSuccess = true;
        }
    } elseif (isset($_POST['email'])) {
        $email = $_POST['email'];
        $emailSent = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Forgot Password?</title>
</head>
<body>
    <main class="main-container">
        <div class="container">
            <h1>Forgot Password?</h1>
            <?php if ($resetSuccess): ?>
                <p style="color: green;">Password reset successful! <a href="login.php">Login now</a>.</p>
            <?php else: ?>
                <?php if ($emailSent): ?>
                    <p style="color: green;">Verification code sent to your email!</p>
                <?php endif; ?>
                <?php if (!empty($error)): ?>
                    <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
                <?php endif; ?>
                <form action="forgotpass.php" method="POST">
                    <div class="form-row">
                        <input type="email" name="email" placeholder="Email" required>
                        <button type="submit" id="code">Send Code</button>
                    </div>
                    <input type="password" name="code-verify" placeholder="Enter Code" required>
                    <h5>Change your Password</h5>
                    <input type="password" name="newpassword" placeholder="New Password" required>
                    <input type="password" name="confirm-pass" placeholder="Confirm Password" required>
                    <button type="submit" id="changepass-btn">Submit</button>
                    <p><a href="login.php">Login Now</a></p>
                </form>
            <?php endif; ?>
        </div>
    </main>
</body>
</html>
