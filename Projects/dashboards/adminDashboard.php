<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrative Dashboard</title>
        <link rel="shortcut icon" href="../assets/images/favicon1.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/cards.css">
        <link rel="stylesheet" href="../assets/fontawesome-free-6.7.1-web/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <body>
        <main>
            <div class="container">
                <div class="left-container">
                    <img src="../assets/images/favicon1.jpg" alt="Images" class="logo-image">
                    <h1>DOr<span class="extension">SU</span></h1>
                    <p>project hub</p>

                    <!--Other buttons-->
                    <div class="btn buttons">
                        <hr>
                        <a href="../admin/manageAdmins.php"><i class="fas fa-wrench"></i> <span class="button-name">Manage Admins</span></a>
                        <a href="#"><i class="fas fa-chalkboard-user"></i> <span class="button-name">Manage Students</span></a>
                        <a href="#"><i class="fas fa-folder-open"></i> <span class="button-name">Manage Projects</span></a>
                        <a href="#"><i class="fas fa-star"></i> <span class="button-name">Reviews</span></a>
                        <a href="#"><i class="fas fa-file-alt"></i> <span class="button-name">Site Reports</span></a>
                        <a href="#"><i class="fas fa-chart-line"></i> <span class="button-name">General Analytics</span></a>
                        <a href="#"><i class="fas fa-cog"></i> <span class="button-name">Settings</span></a>
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

                <div class="right-container">
                    <div class="top-container">
                        <div class="top-left-container">
                            <h2>Dashboard</h2>
                            <p>Track your site analytics</p>
                        </div>
                        <div class="search-container">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Search..." class="search-input">
                        </div>                        
                        <div class="top-right-container">
                            <a href="#" class="notification" id="dashboard"><i class="fas fa-home"></i> <strong>Dashboard</strong></a>
                            <a href="#" class="notification" id="notification"><i class="fas fa-bell"></i> Notifications</a>
                            <a href="../profiles/index.php" class="user" id="user"><i class="fas fa-user"></i> Profile</a>
                        </div>
                    </div>

                    <div class="middle-container">
                        <div class="mid-top-container">
                            <div class="card-container one">
                                <div class="card-title">
                                    <i class="fas fa-diagram-project"></i>
                                    <div class="display">
                                        <h3>Total Projects</h3>
                                    </div>
                                </div>
                                <p class="description">256 Active Projects  <span><i class="fas fa-arrow-up"></i></span></p>
                                <hr class="card-hr">
                                <canvas id="projectsBarChart"></canvas>
                            </div>
                            <div class="card-container two">
                                <div class="card-title">
                                    <i class="fas fa-users"></i>
                                    <div class="display">
                                        <h3>Total Users</h3>
                                    </div>
                                </div>
                                <p class="description">1,024 Registered Users  <span><i class="fas fa-arrow-down"></i></span></p>
                                <hr class="card-hr">
                                <canvas id="usersBarChart"></canvas>
                            </div>
                            <div class="card-container three">
                                <div class="card-title">
                                    <i class="fas fa-hourglass-half"></i>
                                    <div class="display">
                                        <h3>Pending Approvals</h3>
                                    </div>
                                </div>
                                <p class="description">12 Projects Awaiting Approval  <span><i class="fas fa-clock"></i></span></p>
                                <hr class="card-hr">
                                <div class="pending-approvals-container">
                                    <canvas id="pendingApprovalsChart"></canvas>
                                </div>
                            </div>
                        </div>
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

        <script src="../assets/js/usersChart.js"></script>
        <script src="../assets/js/projectsChart.js"></script>
        <script src="../assets/js/pieChart.js"></script>
        <script src="../assets/js/announcement.js"></script>
    </body>
</html>