<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgot.css">
    <title>Hikhokt | Sign up</title>
</head>
<body>
    <?php
    echo
    "<main>",
        "<div class=\"loading hidden\">",
            "<div class=\"loading-container\"></div>",
        "</div>",
        "<div class=\"form-container retrieve personal\">",
            "<div class=\"head-text\">",
                "<p>Personal Details</p>",
            "</div>",
            "<div class=\"inputs\">",
                "<input type=\"text\" placeholder=\"First Name\" required>",
            "</div>",
            "<div class=\"inputs\">",
                "<input type=\"text\" placeholder=\"Middle Name\" required>",
            "</div>",
            "<div class=\"inputs\">",
                "<input type=\"text\" placeholder=\"Last Name\" required>",
            "</div>",
            "<div class=\"inputs\">",
                "<input type=\"text\" placeholder=\"Suffix ex: Jr./Sr.(Optional)\">",
            "</div>",
            "<div class=\"inputs\">",
                "<input class=\"beerday\" type=\"date\" placeholder=\"Birthdate\">",
            "</div>",
            "<div class=\"inputs\">",
                "<input class=\"beerday\" type=\"text\" placeholder=\"Address\">",
            "</div>",
            "<div class=\"inputs\">",
                "<button id=\"next\">Next >></button>",
            "</div>",
            "<div class=\"inputs signup\">",
                "<div class=\"sign-up\">",
                    "<p class=\"normal-text\">Already have an account?<a href=\"login.html\">Sign in</a></p>",
                "</div>",
            "</div>",
        "</div>",
        "<div id=\"retrieve\" class=\"form-container retrieve hidden\">",
            "<div class=\"head-text\">",
                "<p>Account Details</p>",
            "</div>",
            "<div class=\"inputs\">",
                "<input type=\"text\" placeholder=\"Username\">",
            "</div>",
            "<div class=\"inputs\">",
                "<input type=\"email\" placeholder=\"Email\" required>",
            "</div>",
            "<div class=\"inputs\">",
                "<input type=\"password\" placeholder=\"Password\" required>",
            "</div>",
            "<div class=\"inputs\">",
                "<input type=\"password\" placeholder=\"Confirm Password\" required>",
            "</div>",
            "<div class=\"inputs\">",
                "<button id=\"signup\">Register</button>",
            "</div>",
            "<div class=\"inputs signup\">",
                "<div class=\"sign-up\">",
                    "<p class=\"normal-text\">Already have an account?<a href=\"login.html\">Sign in</a></p>",
                "</div>",
            "</div>",
        "</div>",
    "</main>";
    ?>
    <script>

        document.querySelector("#next").addEventListener("click", e => {
            document.querySelector(".loading").classList.remove("hidden")
            setTimeout(() => {
                document.querySelector("#retrieve").classList.remove("hidden")
                document.querySelector(".personal").classList.add("hidden")
            },1000);
            setTimeout(() => {
                document.querySelector(".loading").classList.add("hidden")
            },2000);
        })    
        document.querySelector("#signup").addEventListener("click", e => {
            e.preventDefault();
            document.querySelector("#signup").innerHTML = "Processing...";
            setTimeout(() => {
                document.querySelector("#signup").innerHTML = "Register";
                window.location.href = "dashboard.php"
            },1000);

        })
    </script>
</body>
</html>