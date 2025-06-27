<?php
$adminName = "Noymae D. Molde";
$email = "moldenoymae@gmail.com";
$role = "System Administrator";
$totalUsers = 5;
$systemStatus = "Online";
$lastLogin = "May 13, 2025 - 3:25 AM";
$pendingRequests = 4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Profile</title>
  <link rel="stylesheet" href="styless.css"/>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <h2 class="logo">Dashboard</h2>
      <ul class="menu">
        <li><a href="dashboard.php">🏠 Home</a></li>
        <li><a href="profile.php">👤 Profile</a></li>
        <li><a href="information.php">📄 Users</a></li>
        <li><a href="index.php">🚪 Logout</a></li>
      </ul>
    </aside>

    <main class="main-content">
      <h1 style="text-align: center;">Admin Profile</h1>

      <div class="profile-card">
        <img src="Background/image.png" alt="Admin Picture" />
        <h2><?php echo $adminName; ?></h2>
        <p>Email: <?php echo $email; ?></p>
        <p>Role: <?php echo $role; ?></p>
      </div>

      <div class="card-container">
        <div class="card">
          <h2>Total Users</h2>
          <p><?php echo $totalUsers; ?></p>
        </div>
        <div class="card">
          <h2>System Status</h2>
          <p style="color: green;"><?php echo $systemStatus; ?></p>
        </div>
        <div class="card">
          <h2>Last Login</h2>
          <p><?php echo $lastLogin; ?></p>
        </div>
        <div class="card">
          <h2>Pending Requests</h2>
          <p><?php echo $pendingRequests; ?></p>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
