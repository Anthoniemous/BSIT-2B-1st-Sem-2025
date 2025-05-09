<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Authentication | New Password</title>
        <link rel="shortcut icon" href="../assets/images/favicon1.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../assets/css/confirmation.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/fontawesome-free-6.7.1-web/css/all.min.css">
    </head>

    <body>
        <section class="email-confirmation-container">
            <main>
                <a href="../login.php"><i class="fas fa-arrow-left"></i> Go back</a>

                <div class="container">
                    <div class="prompt-container1">
                        <h3>Ooops...</h3>
                        <img src="../assets/images/fpImageColored.jpg" alt="Image">
                    </div>
                    <div class="prompt-container2">
                        <h1>Recover your Account</h1>
                        <p>Enter your email adddress associated with your account, and we'll send you a confirmation code to reset your password.</p>
                    </div>

                    <form action="codeForm.php">
                        <div class="confirm-form">
                            <div class="confirm-form-container">
                                <div class="form-outline">
                                    <input type="email" id="form" class="form-control" placeholder="Email Address" required/>
                                    <p>*Code resend will be available after a 5-minute duration.</p>
                                </div>
                                <hr>
                                <form action="">
                                    <input type="submit" value="Proceed" class="btn button2">
                                </form>
                            </div>
                        </div>
                    </form>

                    <div class="query-section">
                        <h3>Didn't receive a code? </h3>
                        <p> Check your span folder, internet connection, or try resending the link.</p>
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