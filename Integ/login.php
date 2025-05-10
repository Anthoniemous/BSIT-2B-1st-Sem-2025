<?php
session_start();
$validUser = "user@example.com";
$validPassword = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    if ($email === $validUser && $password === $validPassword) {
        $_SESSION['user'] = $email;
        header("Location: dashboard.php"); // Redirect on successful login
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <title>Login</title>
</head>
<body>
    <main class="main-container">
        <div class="container">
            <h1>Login</h1>
            <?php if (isset($error)) : ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <form action="login.php" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <a href="forgotpass.php">Forgot Password?</a>
                <button type="submit" id="loginButton">Login</button>
                <p>If you don't have an account yet, please <a href="register.php">Sign Up</a></p>
            </form>
        </div>
    </main>
</body>
<script src="assets/js/script.js"></script>
</html>
