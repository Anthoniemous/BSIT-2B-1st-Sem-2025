<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create an account</title>
        <link rel="shortcut icon" href="assets/images/favicon1.jpg" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/form.css">
        <link rel="stylesheet" href="assets/css/register.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/fontawesome-free-6.7.1-web/css/all.min.css">
    </head>

    <body>
      <section class="background-radial-gradient overflow-hidden">
        <!--<div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute rounded-circle shadow-5-strong"></div>-->

        <main>
          <div class="container">
            <div class="left-container">
              <div class="left-container2">
                <h1 class="title1 my-5 display-5 fw-bold ls-tight">The best offers for<span class="title2"> <br>your academic career begins here</span></h1>
                <p class="mb-4 opacity-70">
                  Explore into compact tales of imagination, academic papers, and innovative creations. These excellent initiatives invite you to step into the real world, meet intriguing facts, and experience the human condition. Get lost in the project wilderness within.
                </p>
              </div>
            </div>
  
            <div class="temp-container">
              <!--Main Profile Form Container-->
              <div class="right-container">
                <!--Form Title-->
                <div class="form-title">
                  <div class="logo-image">
                    <img src="assets/images/Logo.jpg" alt="Image">
                  </div>
                  <h3>Profile Form</h3>
                  <div class="logo-image logo2">
                    <h4>DOr<span class="extension">SU</span></h4>
                    <p>project hub</p>
                  </div>
                </div>
                <hr>

                <!--Profile Form Fields-->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="form1" class="form-control" placeholder="First Name" required/>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="form2" class="form-control" placeholder="Last Name" required/>
                    </div>
                  </div>
                </div>
                
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="date" id="form3" class="form-control" placeholder="Date of Birth" required/>
                </div>
                
                <!--Address Field-->
                <fieldset>
                  <legend>Address:</legend>
                  <div class="row">
                    <div class="col-md-8 mb-4">
                      <label for="country">Country: </label>
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form7" class="form-control" placeholder="Philippines..." required/>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <label for="region">Region: </label>
                      <select id="region" class="form-control">
                        <option value="">Region...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="province">Province: </label>
                      <select id="province" class="form-control">
                        <option value="">Province...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="municipality">Municipality: </label>
                      <select id="municipality" class="form-control">
                        <option value="">Municipality...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="barangay">Barangay: </label>
                      <select id="barangay" class="form-control">
                        <option value="">Barangay...</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="zip">Zip Code: </label>
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form8" class="form-control" placeholder="####" required/>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="form9" class="form-control" placeholder="Email Address" required/>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="form10" class="form-control" placeholder="Back-up Email Address" required/>
                </div>

                <hr> 

                <form action="">
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form11" class="form-control" placeholder="ID" required/>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form12" class="form-control" placeholder="Username" required/>
                      </div>
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="passsword" id="form13" class="password-field form-control" placeholder="Password" required/>
                        <p class="password-disclaimer">*Password must be 6-12 characters in length. Must include letters, numbers, and special characters.</p>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="passsword" id="form14" class="form-control" placeholder="Confirm Password" required/>
                      </div>
                    </div>
                  </div>
                  
                  <!--Profile Form Disclaimer-->
                  <p class="disclaimer">*We will never share your information with anyone else.</p>
                  <hr>
    
                  <button id="sign-up-btn" type="submit" onclick="window.location.href='/login.php';" data-mdb-ripple-init class="btn btn-signup btn-block mb-4">
                    Register
                  </button>
    
                  <!--OAuthentication Links-->
                  <div class="text-center">
                    <p>or register with:</p>
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
    
                  <div class="text-center login">
                    <p>Already have an account? <a href="login.php" class="login">Log in</a></p>
                  </div>
                </form>
              </div>
  
              
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
        <script src="assets/js/register.js"></script>
        <script src="assets/js/pshideUnhide.js"></script>
        <script src="assets/js/psgc.js"></script>
    </body>
</html>