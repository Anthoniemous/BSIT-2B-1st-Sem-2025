<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $primaryemail = htmlspecialchars($_POST['primaryemail']);
    $secondaryemail = htmlspecialchars($_POST['secondaryemail']);
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $street = htmlspecialchars($_POST['street']);
    $username = htmlspecialchars($_POST['username']);
    $municipality = htmlspecialchars($_POST['select']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $zipcode = htmlspecialchars($_POST['zipcode']);

    // Example: Echoing values (not secure for production use)
    echo "<h2>Form Submitted Successfully</h2>";
    echo "Name: $firstname $lastname<br>";
    echo "Primary Email: $primaryemail<br>";
    echo "Secondary Email: $secondaryemail<br>";
    echo "Birthdate: $birthdate<br>";
    echo "Street: $street<br>";
    echo "Username: $username<br>";
    echo "Municipality: $municipality<br>";
    echo "Zipcode: $zipcode<br>";
    // Don't display passwords in real apps!
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Register</title>
</head>
<body>
    <main class="main-container">
        <div class="container-register">
            <h1>Register</h1>
            <form action="register.php" method="POST" class="form-container">
                <div class="form-row">
                    <input type="text" name="firstname" placeholder="First Name" required>
                    <input type="email" name="primaryemail" placeholder="Primary Email" required>
                </div>
                <div class="form-row">
                    <input type="text" name="lastname" placeholder="Last Name" required>
                    <input type="email" name="secondaryemail" placeholder="Secondary Email" required>
                </div>
                <div class="form-row">
                    <label for="birthdate">
                        Birthday
                        <input type="date" name="birthdate" required>
                    </label>
                    <input type="text" name="street" placeholder="Street" required>
                </div>
                <div class="form-row"> 
                    <input type="text" name="username" placeholder="Username" required>
                    <select name="select" id="select" required>
                        <option value="Banaybanay">Banaybanay</option>
                        <option value="Lupon">Lupon</option>
                        <option value="Pantukan">Pantukan</option>
                    </select>
                </div>
                <div class="form-row">
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="number" name="zipcode" placeholder="ZipCode" required>
                </div>
                <button type="submit" id="loginButton">Sign up</button>
                <p>If you have an account already, please <a href="login.php">Login</a></p>
            </form>
        </div> 
    </main>
</body>
</html>
