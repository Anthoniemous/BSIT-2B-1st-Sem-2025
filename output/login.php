<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgot.css">
    <title>Hikhokt | Login</title>
</head>
<body>
    <?php
    echo 
    "<main>",
        "<div class=\"loading hidden\">",
            "<div class=\"loading-container\"></div>",
        "</div>",
        "<div class=\"form-container retrieve\">",
            "<div class=\"head-text\">",
                "<p>Hikhokt</p>",
            "</div>",
            "<div class=\"inputs\">",
                "<input type=\"email\" placeholder=\"Email\" required>",
            "</div>",
            "<div class=\"inputs\">",
                "<input type=\"password\" placeholder=\"Password\" required>",
            "</div>",
            "<div class=\"inputs signup\">",
                "<div class=\"save-account\">",
                    "<div class=\"remember\">",
                        "<input class=\"check-box\" type=\"checkbox\">",
                        "<p class=\"normal-text\">Remember</p>",
                    "</div>",
                    "<div class=\"forgot\">",
                        "<a class=\"normal-text\" href=\"forgot.html\">Forgot password?</a>",
                    "</div>",
                "</div>",
            "</div>",
            "<div class=\"inputs\">",
                "<button id=\"login\">Login</button>",
            "</div>",
            "<div class=\"sign-up\">",
                "<p class=\"normal-text\">Don't have an account?<a href=\"signup.html\">Sign up</a></p>",
            "</div>",
        "</div>",
    "</main>";
    ?>
    <script>
        document.querySelector("#login").addEventListener("click", e => {
            e.preventDefault();
            window.location.href = "dashboard.php"
        })
    </script>
</body>
</html>