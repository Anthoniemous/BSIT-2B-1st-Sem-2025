<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Code Verification | New Password</title>
        <link rel="shortcut icon" href="../assets/images/favicon1.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../assets/css/confirmation.css">
        <link rel="stylesheet" href="../assets/css/codeForm.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/fontawesome-free-6.7.1-web/css/all.min.css">
    </head>

    <body>
        <section class="email-confirmation-container">
            <main>
                <a href="confirmation.php"><i class="fas fa-arrow-left"></i> Go back</a>

                <div class="container">
                    <div class="prompt-container1">
                        <h3>Ooops...</h3>
                        <img src="../assets/images/fpImageColored.jpg" alt="Image">
                    </div>
                    <div class="prompt-container2">
                        <h1>Recover your Account</h1>
                        <p>Confirmation code has been sent successfully to your account. Kindly enter the 6-digit verification code to proceed.</p>
                    </div>

                    <form action="resetPassword.php">
                        <div class="code-form">
                            <div class="code-form-container">
                                <div class="code-form-outline">
                                    <input type="text" id="form1" class="form-control" placeholder="#" required/>
                                    <input type="text" id="form2" class="form-control" placeholder="#" required/>
                                    <input type="text" id="form3" class="form-control" placeholder="#" required/>
                                    <input type="text" id="form4" class="form-control" placeholder="#" required/>
                                    <input type="text" id="form5" class="form-control" placeholder="#" required/>
                                    <input type="text" id="form6" class="form-control" placeholder="#" required/>
                                </div>
                                <hr>
                                <form action="">
                                    <input type="submit" value="Verify" class="btn button2">
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
                <footer>
                    <p>© All Rights Reserved 2024</p>
                    <a href="#" class="formal-links" id="privacy-policy">Privacy Policy</a>
                    <a href="#" class="formal-links" id="terms-of-service">Terms of Service</a>
                    <a href="#" class="formal-links" id="cookies-policy">Cookies Policy</a>
                </footer>
            </footer>
        </section>

        <script src="../assets/js/codeForm.js"></script>
    </body>
</html>