<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="bearing.png" type="image/x-icon">
    <link rel="stylesheet" href="dashboard2.css">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <main>
        <?php
        function renderNav() {
            echo '    <header>
                <nav>
                    <div class="logo-container">
                        <img src="bearing.png" alt="">
                        <h1>Hikhokt</h1>
                    </div>
                    <ul>
                        <li class="selected">
                            <a href="#dashboard">Dashboard</a>
                        </li>
                    </ul>
                </nav>';
        }

        function renderUserProfile($name, $email, $imgSrc) {
            echo '<div class="user-profile">
                <img src="' . $imgSrc . '" alt="">
                <p class="profile" onclick="toggleMenu()">' . $email . ' <span>▼</span></p>
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="' . $imgSrc . '" alt="">
                            <h3>' . $name . '</h3>
                        </div>
                        <hr>
                        <a href="profile.php" class="sub-menu-link">
                            <p>Profile</p>
                            <span>></span>
                        </a>
                        <a href="login.php" class="sub-menu-link">
                            <p>Logout</p>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>';
        }

        function renderTable($title, $rows) {
            echo '<div class="title poppins-light">' . $title . '</div>
            <div class="poppins-light table-container">
                <table class="clean-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>';
            foreach ($rows as $row) {
                echo '<tr>';
                foreach ($row as $key => $value) {
                    if ($key === 'status') {
                        echo '<td class="' . strtolower($value) . '">' . $value . '</td>';
                    } else {
                        echo '<td>' . $value . '</td>';
                    }
                }
                echo '</tr>';
            }
            echo '</tbody></table></div>';
        }

        $students = [
            ['id' => 1, 'name' => 'John Doe', 'department' => 'BSIT', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Jane Smith', 'department' => 'BTLED', 'status' => 'Inactive'],
            ['id' => 3, 'name' => 'Bob Johnson', 'department' => 'BSBA', 'status' => 'Inactive'],
            ['id' => 4, 'name' => 'Breznev Cona', 'department' => 'BSIT', 'status' => 'Active'],
            ['id' => 5, 'name' => 'Ron Imran Parao', 'department' => 'BSIT', 'status' => 'Active'],
            ['id' => 6, 'name' => 'Josphen Bracken', 'department' => 'BSA/BAT', 'status' => 'Active'],
        ];

        $employees = [
            ['id' => 1, 'name' => 'Jin Abijay', 'department' => 'BSIT', 'status' => 'Active'],
            ['id' => 2, 'name' => 'John Bagcal', 'department' => 'BSBA', 'status' => 'Active'],
            ['id' => 3, 'name' => 'John Paulin', 'department' => 'BSIT', 'status' => 'Active'],
            ['id' => 4, 'name' => 'Mark Larita', 'department' => 'BSIT', 'status' => 'Active'],
            ['id' => 5, 'name' => 'Cherime Bautista', 'department' => 'BSBA', 'status' => 'Active'],
            ['id' => 6, 'name' => 'Daniel Baldoz', 'department' => 'BSA/BAT', 'status' => 'Active'],
        ];

        renderNav();
        renderUserProfile("Ruben Panuncialman", "kawaii.ako12@gmail.com", "political-elite-rgb-color-icon-vector-removebg-preview.png");
        ?>

        <section>
            <div class="head-text">
                <h2>Dashboard</h2>
            </div>
            <div class="main-content">
                <!-- Charts and content would go here -->
                <div class="table-content">
                    <?php
                    renderTable('Students', $students);
                    renderTable('Employees', $employees);
                    ?>
                </div>
            </div>
        </section>
    </main>
    <script src="chart.umd.js"></script>
    <script>
        function toggleMenu() {
            document.getElementById('subMenu').classList.toggle('open-menu');
        }
    </script>
</body>
</html>
