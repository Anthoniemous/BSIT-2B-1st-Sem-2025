<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage Administrators</title>
        <link rel="shortcut icon" href="../assets/images/favicon1.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/cards.css">
        <link rel="stylesheet" href="../assets/css/admin.css">
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
                        <a href="#" class="manageAdmins"><i class="fas fa-wrench"></i> <span class="button-name">Manage Admins</span></a>
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
                    <div class="top-container admin">
                        <div class="top-left-container">
                            <h2>Manage Site Administrators</h2>
                        </div>
                        <div class="search-container">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Search..." class="search-input">
                        </div>                        
                        <div class="top-right-container">
                            <a href="../dashboards/adminDashboard.php" class="notification" id="dashboard"><i class="fas fa-home"></i> <strong>Dashboard</strong></a>
                            <a href="#" class="notification" id="notification"><i class="fas fa-bell"></i> Notifications</a>
                            <a href="../profiles/index.php" class="user" id="user"><i class="fas fa-user"></i> Profile</a>
                        </div>
                    </div>

                    <div class="middle-container">
                        <div class="mid-top-container">
                            <div class="card-container admin-one">
                                <div class="card-title">
                                    <div class="display">
                                        <h3>Administrator Engagement</h3>
                                    </div>
                                </div>
                                <p class="description">Administrative Engagement for the last four (4) months</p>
                                <hr class="card-hr">
                                <div class="pending-approvals-container">
                                    <canvas id="adminEngBarChart"></canvas>
                                </div>
                            </div>
                            <div class="card-container admin-two">
                                <div class="card-title">
                                    <div class="display">
                                        <h3>Total Administrators</h3>
                                    </div>
                                </div>
                                <p class="description">Five (5) Administrators</p>
                                <hr class="card-hr">
                                <p class="admin-data">5</p>
                            </div>
                            <div class="card-container admin-three">
                                <div class="card-title">
                                    <div class="display">
                                        <h3>Active Administrators</h3>
                                    </div>
                                </div>
                                <p class="description">Four (4) Active Administrators</p>
                                <hr class="card-hr">
                                <p class="admin-data">4</p>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th class="engagement">Engagement</th>
                                    <th> </th>
                                    <th id="add"><div class=" btn add-admin"><a href="../adminRegister.php">Add Admin <i class="fas fa-add"></i></a></div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Breznev Cona</td>
                                    <td class="role">Regular Admin</td>
                                    <td class="status active">Active</td>
                                    <td>30%</td>
                                    <td><button type="submit" class="btn edit">Edit</button></td>
                                    <td><button type="submit" class="btn delete">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>Aleah Mae Urbuda</td>
                                    <td class="role">Regular Admin</td>
                                    <td class="status active">Active</td>
                                    <td>15%</td>
                                    <td><button type="submit" class="btn edit">Edit</button></td>
                                    <td><button type="submit" class="btn delete">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>Ron Imran G. Parao</td>
                                    <td class="role">Regular Admin</td>
                                    <td class="status inactive">Inactive</td>
                                    <td>-</td>
                                    <td><button type="submit" class="btn edit">Edit</button></td>
                                    <td><button type="submit" class="btn delete">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>Ejay Martinez</td>
                                    <td class="role">Regular Admin</td>
                                    <td class="status active">Active</td>
                                    <td>25%</td>
                                    <td><button type="submit" class="btn edit">Edit</button></td>
                                    <td><button type="submit" class="btn delete">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>Ruben Panuncialman</td>
                                    <td class="role">Regular Admin</td>
                                    <td class="status active">Active</td>
                                    <td>10%</td>
                                    <td><button type="submit" class="btn edit">Edit</button></td>
                                    <td><button type="submit" class="btn delete">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <script src="../assets/js/adminEngBarChart.js"></script>
        <script src="../assets/js/announcement.js"></script>
    </body>
</html>