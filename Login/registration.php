<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="registration-container">
        <div class="registration-form">
            <h2>Admin Registration</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your full name">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required placeholder="Confirm your password">
                </div>
                <button type="submit" class="submit-btn">Register</button>
            </form>
            <p class="login-link">Already have an account? <a href="index.html">Login here</a></p>
        </div>
    </div>
</body>
</html>

<style>
  /* Registration Page Styling */
.registration-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #6dbef4;
}

.registration-form {
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

.registration-form h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-size: 16px;
    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.form-group input:focus {
    border-color: #007bff;
    outline: none;
}

.submit-btn {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #0056b3;
}

.login-link {
    text-align: center;
    margin-top: 20px;
}

.login-link a {
    color: #007bff;
    text-decoration: none;
}

.login-link a:hover {
    text-decoration: underline;
}

/* Responsive styling */
@media (max-width: 768px) {
    .registration-form {
        padding: 20px;
        width: 90%;
    }
}

</style>