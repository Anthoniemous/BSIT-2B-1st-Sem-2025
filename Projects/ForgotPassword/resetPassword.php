<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Change your Password</title>
        <link rel="shortcut icon" href="../assets/images/favicon1.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../assets/css/confirmation.css">
        <link rel="stylesheet" href="../assets/css/resetPassword.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/fontawesome-free-6.7.1-web/css/all.min.css">
    </head>

    <body>
        <section class="code-reset-container">
            <main>
                <a href="../login.php"><i class="fas fa-x"></i> Go back to login</a>

                <div class="container">
                    <div class="main-container">
                        <div class="prompt-container1">
                            <img src="../assets/images/fpLock.jpg" alt="Image">
                            <h1>Reset your password...</h1>
                        </div>
        
                        <form action="../login.php">
                            <div class="code-reset-form">
                                <div class="reset-form-container">
                                    <input type="password" id="form1" class="form-control" placeholder="New Password" required/>
                                    <p class="password-disclaimer">*Password must be 6-12 characters in length. Must include letters, numbers, and special characters.</p>
                                    <input type="password" id="form2" class="form-control" placeholder="Confirm New Password" required/>
                                    <hr>
                                    <form action="">
                                        <input type="submit" value="Verify" class="btn button2">
                                    </form>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>

            <footer>
                <p>© All Rights Reserved 2024</p>
                <a href="#" class="formal-links" id="privacy-policy">Privacy Policy</a>
                <a href="#" class="formal-links" id="terms-of-service">Terms of Service</a>
                <a href="#" class="formal-links" id="cookies-policy">Cookies Policy</a>
            </footer>
        </section>
    </body>
</html>