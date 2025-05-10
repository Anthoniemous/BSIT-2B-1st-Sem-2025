<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Profile</title>
</head>
<body>
    <?php
    echo
    "<main>",
        "<div class=\"loading hidden\">",
           "<div class=\"loading-container\"></div>",
        "</div>",
        "<div class=\"profile-card\">",
            "<div class=\"profile-sidebar\">",
                "<div class=\"profile-picture\">",
                    "<img src=\"political-elite-rgb-color-icon-vector-removebg-preview.png\" alt=\"\">",
                    "<div class=\"person-name\">",
                        "<p class=\"name\">Ruben Panuncialman</p>",
                        "<p>User ID: 2023-6178</p>",
                    "</div>",
                "</div>",
                "<div class=\"navigations\">",
                    "<nav>",
                        "<ul>",
                            "<li class=\"nav1 selected\">Personal Details</li>",
                            "<li class=\"nav2\">Account Details</li>",
                            "<li class=\"nav3\" >Back to Home Page</li>",
                            
                        "</ul>",
                    "</nav>",
                "</div>",
            "</div>",
            "<div class=\"profile-content\">",
                "<h1 class=\"head-text\">Personal Details</h1>",
                "<div class=\"content personal\">",
                    "<div class=\"details\">",
                        "<h2>Name</h2>",
                        "<div class=\"fullname\">",
                            "<div class=\"details-name\">",
                                "<span>First Name: </span>",
                                "<div class=\"fullname-name\">",
                                    "Ruben",
                                "</div>",
                            "</div>",
                            "<div class=\"details-name\">",
                                "<span>Middle Name: </span>",
                                "<div class=\"fullname-name\">",
                                    "Cabreros",
                                "</div>",
                            "</div>",
                            "<div class=\"details-name\">",
                                "<span>Last Name: </span>",
                                "<div class=\"fullname-name\">",
                                    "Panuncialman",
                                "</div>",
                            "</div>",
                            "<div class=\"details-name\">",
                                "<span>Suffix: </span>",
                                "<div class=\"fullname-name\">",
                                    "<p>Jr</p>",
                                "</div>",
                            "</div>",
                        "</div>",
                        "<h2>Hobbies</h2>",
                        "<div class=\"hobby\">",
                            "<p>Playing Online Games</p>",
                            "<p>Watching Anime</p>",
                            "<p>Basta Molaag</p>",
                            "<p>Sleeping</p>",
                            "<p>Magtinapulan</p>",
                        "</div>",
                      
                        "<div class=\"bio\">",
                            "<h2>Bio</h2>",
                            "<p class=\"bios\">",
                               " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I’m Ruben Panuncialman, a passionate learner and problem-solver who thrives on simplicity and clarity. I’m driven by a growth mindset, believing that every step forward, no matter how small, brings me closer to my bigger goals. I embrace challenges with perseverance and am committed to creating clean, effective solutions that matter. I believe in the power of self-reflection, original thought, and taking responsibility for my actions, both in my personal journey and professional work.",
                            "</p>",
                        "</div>",
                    "</div>",
                "</div>",
                "<div class=\"content account hidden\">",
                    "<div class=\"details\">",
                        "<h2>Name</h2>",
                        "<div class=\"fullname\">",
                            "<div class=\"details-name\">",
                                "<span>First Name: </span>",
                                "<div class=\"fullname-name\">",
                                    "<input type=\"text\" name=\"\" id=\"input1\" value=\"Ruben\" disabled>",
                                    "<div class=\"edit-button edit1\">Edit</div>",
                                "</div>",
                            "</div>",
                            "<div class=\"details-name\">",
                                "<span>Middle Name: </span>",
                                "<div class=\"fullname-name\">",
                                    "<input type=\"text\" id=\"input2\" value=\"Cabreros\" disabled>",
                                    "<div class=\"edit-button edit2\">Edit</div>",
                                "</div>",
                            "</div>",
                            "<div class=\"details-name\">",
                                "<span>Last Name: </span>",
                                "<div class=\"fullname-name\">",
                                    "<input type=\"text\" id=\"input3\" value=\"Panuncialman\" disabled>",
                                    "<div class=\"edit-button edit3\">Edit</div>",
                                "</div>",
                            "</div>",
                            "<div class=\"details-name\">",
                                "<span>Suffix: </span>",
                                "<div class=\"fullname-name\">",
                                    "<input type=\"text\" id=\"input4\" value=\"Jr.\" disabled>",
                                    "<div class=\"edit-button edit4\">Edit</div>",
                                "</div>",
                            "</div>",
                        "</div>",
                    "</div>",
                "</div>",
            "</div>",
        "</div>",
    "</main>";
    ?>
    <script>
        document.querySelector(".edit1").addEventListener("click", e =>{
            document.querySelector(".edit1").innerHTML = !document.querySelector("#input1").disabled ? "Edit" : "Save"
            document.querySelector("#input1").disabled = !document.querySelector("#input1").disabled;
        })
        document.querySelector(".edit2").addEventListener("click", e =>{
            document.querySelector(".edit2").innerHTML = !document.querySelector("#input2").disabled ? "Edit" : "Save"
            document.querySelector("#input2").disabled = !document.querySelector("#input2").disabled;
        })
        document.querySelector(".edit3").addEventListener("click", e =>{
            document.querySelector(".edit3").innerHTML = !document.querySelector("#input3").disabled ? "Edit" : "Save"
            document.querySelector("#input3").disabled = !document.querySelector("#input3").disabled;
        })
        document.querySelector(".edit4").addEventListener("click", e =>{
            document.querySelector(".edit4").innerHTML = !document.querySelector("#input4").disabled ? "Edit" : "Save"
            document.querySelector("#input4").disabled = !document.querySelector("#input4").disabled;
        })
        document.querySelector(".nav1").addEventListener("click", e => {
            e.preventDefault();
            document.querySelector(".head-text").innerHTML = "Personal Details"
            document.querySelector(".nav1").classList.add("selected")
            document.querySelector(".nav2").classList.remove("selected")
            document.querySelector(".nav3").classList.remove("selected")
            document.querySelector(".loading").classList.remove("hidden")
            setTimeout(() => {
                document.querySelector(".personal").classList.remove("hidden")
                document.querySelector(".account").classList.add("hidden")
            },500);
            setTimeout(() => {
                document.querySelector(".loading").classList.add("hidden")
            },1000);
        })  
        document.querySelector(".nav2").addEventListener("click", e => {
            e.preventDefault();
            document.querySelector(".head-text").innerHTML = "Account Details"
            document.querySelector(".nav2").classList.add("selected")
            document.querySelector(".nav1").classList.remove("selected")
            document.querySelector(".nav3").classList.remove("selected")
            document.querySelector(".loading").classList.remove("hidden")
            setTimeout(() => {
                document.querySelector(".account").classList.remove("hidden")
                document.querySelector(".personal").classList.add("hidden")
            },500);
            setTimeout(() => {
                document.querySelector(".loading").classList.add("hidden")
            },1000);
        })
        document.querySelector(".nav3").addEventListener("click", e => {
            e.preventDefault();
            document.querySelector(".nav3").classList.add("selected")
            document.querySelector(".nav1").classList.remove("selected")
            document.querySelector(".nav2").classList.remove("selected")
            document.querySelector(".loading").classList.remove("hidden")
            setTimeout(() => {
                window.location.href = "dashboard.php"
            },1000);
        }) 
    </script>
</body>
</html>