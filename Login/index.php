<!DOCTYPE html>
<html lang="en">
<head>
    <title>Solo Leveling Form Official</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <header class="header">
    <nav class="navbar">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <a href="#">Help</a>
    </nav>
    
   </header>
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><i class='bx bxl-xing'></i>Register Now</h2>
            <div class="text-item">
                <h2>Welcome! <br><span>Adventurer</span></h2>
                <p>
                  "Greetings, brave soul. The winds of destiny have guided you here, 
                  where the unknown awaits. May your journey be filled with endless adventure, 
                  and may the stars light your path as you step forth into realms yet uncharted. 
                  Welcome to the realm of possibilities!"
                </p>
                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
        <div class="login-section">
            <div class="form-box login">
                <form action="">
                    <h2>Sign In</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Remember Me</label>
                        <a href="#">Forget Password</a>
                    </div>
                    <button type="button" class="btn" onclick="window.location.href='interface.html'">Login In</button>

                    <div class="create-account">
                        <p>Create A New Account? <a href="#" class="register-link">Sign Up</a></p>
                    </div>
                </form>
            </div>
            <div class="form-box register">
                <form action="">
                    <h2>Sign Up</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-id-card'></i></span>
                        <input type="text" required>
                        <label>User Id</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" required>
                        <label>First Name</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" required>
                        <label>Last Name</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-calendar'></i></span>
                        <input type="date">
                        <label>Date of Birth</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label>Primary Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label>Secondary Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-home'></i></span>
                        <input type="text" required>
                        <label>Address</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">I agree with this statement</label>
                    </div>
                    <button class="btn">Register</button>
                    <div class="create-account">
                        <p>Already Have An Account? <a href="#" class="login-link">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
      const loginsec=document.querySelector('.login-section')
      const loginlink=document.querySelector('.login-link')
      const registerlink=document.querySelector('.register-link')
      registerlink.addEventListener('click',()=>{
          loginsec.classList.add('active')
      })
      loginlink.addEventListener('click',()=>{
          loginsec.classList.remove('active')
      })
    </script>

    
</body>
</html>
