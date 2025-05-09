<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login to Account</title>
        <link rel="shortcut icon" href="assets/images/favicon1.jpg" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/form.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/fontawesome-free-6.7.1-web/css/all.min.css">
    </head>

    <body>
      <section class="background-radial-gradient overflow-hidden">
        <main>
          <div class="container">
            <!--<div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-3" class="position-absolute rounded-circle shadow-5-strong"></div>-->
  
            <div class="main-container">
              <form action="">
                <h2>Log in</h2>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form1" class="form-control" placeholder="Username" required/>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form2" class="form-control" placeholder="Password" required/>
                </div>
                <p class="forgotPrompt">Forgot Password? <a href="ForgotPassword\confirmation.php">Click here</a></p>
                <hr>
                <button id="sign-in-btn" type="submit" onclick="window.location.href='dashboards/adminDashboard.php'" data-mdb-ripple-init class="btn btn-signup btn-block mb-4">
                  Log in
                </button>
  
                <div class="text-center">
                  <p>or log in with:</p>
                  <a href="#" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook"></i>
                  </a>
                  <a href="#" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </a>
                  <a href="#" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a href="#" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-discord"></i>
                  </a>
                </div>
  
                <div class="text-center register">
                  <p>Do not have an account? <a href="register.php" class="register">Register</a></p>
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

        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/signup.js"></script>
    </body>
</html>