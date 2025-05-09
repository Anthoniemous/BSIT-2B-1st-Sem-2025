<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrator Registration</title>
        <link rel="shortcut icon" href="assets/images/favicon1.jpg" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/form.css">
        <link rel="stylesheet" href="assets/css/register.css">
        <link rel="stylesheet" href="assets/css/adminRegister.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/fontawesome-free-6.7.1-web/css/all.min.css">
    </head>

    <body>
      <section class="background-radial-gradient overflow-hidden">
        <main>
            <div class="temp-container">
                <!--Main Profile Form Container-->
                <div class="right-container">
                    <!--Form Title-->
                    <div class="form-title">
                    <div class="logo-image">
                        <img src="assets/images/Logo.jpg" alt="Image">
                    </div>
                    <h3>Admin Profile Form</h3>
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

                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="form9" class="form-control" placeholder="Email Address" required/>
                    </div>

                    <select id="role" name="role" title="Select a role">
                        <option value="">Select a role...</option>
                        <option value="admin">Regular Admin</option>
                        <option value="moderator">Super Admin</option>
                    </select>

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
        
                    <button id="sign-up-btn" type="submit" onclick="window.location.href='admin/manageAdmins.php';" data-mdb-ripple-init class="btn btn-signup btn-block mb-4">
                        Register Admin
                    </button>
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
    </body>
</html>