<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1>Forgot Password</h1>
            <div class="input-box">
                <input type="email" name="email" placeholder="Enter your email" required>
                <i class="bx bxs-envelope"></i>
            </div>
            <button type="submit" class="btn">Send</button>
            <div class="back-to-login">
                <p>Remembered your password? <a href="index.html">Back to Login</a></p>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // This is where you'd normally handle sending the reset email
                // For demonstration:
                echo "<p style='color: green; text-align: center;'>Password reset instructions sent to <strong>" . htmlspecialchars($email) . "</strong>.</p>";
            } else {
                echo "<p style='color: red; text-align: center;'>Invalid email address.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
