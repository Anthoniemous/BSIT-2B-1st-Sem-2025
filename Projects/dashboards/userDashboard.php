<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Dashboard</title>
        <link rel="shortcut icon" href="../assets/images/favicon1.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/cards.css">
        <link rel="stylesheet" href="../assets/css/userDashboard.css">
        <link rel="stylesheet" href="../assets/fontawesome-free-6.7.1-web/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <body>
        <main>
            <div class="container user-container">
                <div class="left-container">
                    <img src="../assets/images/favicon1.jpg" alt="Images" class="logo-image">
                    <h1>DOr<span class="extension">SU</span></h1>
                    <p>project hub</p>

                    <!--Other buttons-->
                    <div class="btn buttons">
                        <hr>
                        <a href="#"><i class="fas fa-file"></i> <span class="button-name">Project Drafts</span></a>
                        <a href="#"><i class="fas fa-briefcase"></i> <span class="button-name">Accounts</span></a>
                        <a href="#"><i class="fas fa-gear"></i> <span class="button-name">Settings</span></a>
                        <a href="../login.php"><i class="fas fa-door-open"></i> <span class="button-name">Log-out</span></a>
                        <hr class="bottom-hr">
                    </div>
                    <div class="btn links">
                        <div class="link-container">
                            <a href="#" class="formal-links" id="privacy-policy">Privacy Policy</a>
                            <a href="#" class="formal-links" id="terms-of-service">Terms of Service</a>
                            <a href="#" class="formal-links" id="cookies-policy">Cookies Policy</a>
                            <p>© All Rights Reserved 2024</p>
                        </div>
                    </div>
                </div>

                <div class="right-container user">
                    <div class="top-container user">
                        <div class="top-left-container user">
                            <h2>Welcome to the hub!</h2>
                        </div>
                        <div class="search-container user">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Search..." class="search-input">
                        </div>                        
                        <div class="top-right-container user">
                            <a href="#" class="home" id="home user"><i class="fas fa-home"></i> Home</a>
                            <a href="#" class="notification" id="notification"><i class="fas fa-bell"></i> Notifications</a>
                            <a href="#" class="faqs" id="faqs"><i class="fas fa-question-circle"></i> FAQs</a>
                            <a href="../profiles/userProfile.php" class="user" id="user"><i class="fas fa-user"></i> Profile</span></a>
                        </div>
                    </div>

                    <div class="middle-container user">
                        
                    </div>

                    <div class="bottom-container">
                        <div class="card-container">
                            <div class="card-title">
                                <div class="title-left">
                                    <h4>System Announcements</h4>
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <button class="toggle-btn" onclick="toggleAnnouncements()">Collapse</button>
                            </div>
                            <hr>
                            <div id="announcementsContent" class="announcement-content">
                                <p><strong>New Feature:</strong> We've added a batch processing option to manage your tasks.</p>
                                <p><strong>Scheduled Maintenance:</strong> The platform will be down for maintenance on Friday at midnight.</p>
                                <p><strong>Security Update:</strong> Encryption protocols have been updated to enhance security.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
    </body>
</html>