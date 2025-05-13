<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $email = $_POST['email'] ?? '';
    $age = $_POST['age'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';

    
    if ($username && $password && $email && $age && $gender && $birthdate) {
        
        echo "<p style='color: green; text-align: center;'>Registration successful!</p>";
    } else {
        echo "<p style='color: red; text-align: center;'>Please fill in all fields.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1>Register</h1>
            
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                <i class="bx bxs-user"></i>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class="bx bxs-lock-alt"></i>
            </div>

            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class="bx bxs-envelope"></i>
            </div>

            <div class="input-box">
                <input type="number" name="age" placeholder="Age" required>
                <i class="bx bxs-calendar"></i>
            </div>

            <div class="input-box">
                <select name="gender" required>
                    <option value="" disabled selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <i class="bx bxs-gender-female"></i>
            </div>

            <div class="input-box">
                <input type="date" name="birthdate" required>
                <i class="bx bxs-calendar-event"></i>
            </div>
 
            <button type="submit" class="btn">Register</button>

            <div class="register-link">
                <p>Already have an account? <a href="index.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
