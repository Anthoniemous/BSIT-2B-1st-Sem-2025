<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgot.css">
    <title>Hikhokt | Forgot Password</title>
</head>
<body>
<?php
    echo 
        "<main>",
            "<div class=\"loading hidden\">",
                "<div class=\"loading-container\"></div>",
            "</div>",
            "<div class=\"form-container find\">",
               "<div class=\"head-text\">",
                   "<p>Find Username</p>",
                "</div>",
                "<div class=\"inputs\">",
                    "<input type=\"email\" placeholder=\"Enter username\" required>",
                "</div>",
                "<div class=\"inputs\">",
                    "<button id=\"submitUsername\">Find</button>",
                "</div>",      
            "</div>",
            "<div class=\"form-container retrieve hidden\">",
                "<div class=\"head-text\">",
                    "<p>Recovery Email</p>",
                "</div>",
                "<div class=\"inputs\">",
                    "<input type=\"email\" placeholder=\"Enter recovery email\" required>",
                "</div>",
                "<div class=\"inputs\">",
                    "<button id=\"submitEmail\">Send Recovery Code</button>",
                "</div>",
            "</div>",
            "<div class=\"form-container code hidden\">",
                "<div class=\"head-text\">",
                    "<p>Recovery Code</p>",
                "</div>",
                "<div class=\"inputs\">",
                    "<input type=\"text\" placeholder=\"Enter Code\" required>",
                "</div>",
                "<div class=\"inputs\">",
                    "<button class=\"codeButton\" id=\"submitCode\">Submit</button>",
                "</div>",
            "</div>",
            "<div class=\"form-container password setup hidden\">",
                "<div class=\"head-text\">",
                    "<p>Setup New Password</p>",
                "</div>",
                "<div class=\"inputs\">",
                    "<input type=\"password\" placeholder=\"New Password\" required>",
                "</div>",
                "<div class=\"inputs\">",
                    "<input type=\"password\" placeholder=\"Confirm New Password\" required>",
                "</div>",
                "<div class=\"inputs\">",
                    "<button class=\"codeButton\" id=\"submitNewPassword\">Finish</button>",
                "</div>",
            "</div>",
        "</main>";
    ?>
    <!-- JavaScript for transitions -->
    <script>
        document.querySelector("#submitUsername").addEventListener("click", e => {
            e.preventDefault();
            document.querySelector(".loading").classList.remove("hidden");
            setTimeout(() => {
                document.querySelector(".retrieve").classList.remove("hidden");
                document.querySelector(".find").classList.add("hidden");
            }, 1000);
            setTimeout(() => {
                document.querySelector(".loading").classList.add("hidden");
            }, 2000);
        });

        document.querySelector("#submitEmail").addEventListener("click", e => {
            e.preventDefault();
            document.querySelector(".loading").classList.remove("hidden");
            setTimeout(() => {
                document.querySelector(".code").classList.remove("hidden");
                document.querySelector(".retrieve").classList.add("hidden");
            }, 1000);
            setTimeout(() => {
                document.querySelector(".loading").classList.add("hidden");
            }, 2000);
        });

        document.querySelector("#submitCode").addEventListener("click", e => {
            e.preventDefault();
            document.querySelector(".loading").classList.remove("hidden");
            setTimeout(() => {
                document.querySelector(".password").classList.remove("hidden");
                document.querySelector(".code").classList.add("hidden");
            }, 1000);
            setTimeout(() => {
                document.querySelector(".loading").classList.add("hidden");
            }, 2000);
        });

        document.querySelector("#submitNewPassword").addEventListener("click", e => {
            e.preventDefault();
            document.querySelector(".loading").classList.remove("hidden");
            setTimeout(() => {
                window.location.href = "dashboard.php"; // Redirect to PHP version of dashboard
            }, 2000);
        });
    </script>
</body>
</html>
