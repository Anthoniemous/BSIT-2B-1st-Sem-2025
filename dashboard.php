<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
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
      <h1>Welcome to my dashboard!</h1>
      <div class="stats">
        <div class="card">
          <h2>📚 Courses</h2>
          <p><?php echo 4; ?></p>
        </div>
        <div class="card">
          <h2>🏢 Departments</h2>
          <p><?php echo 4; ?></p>
        </div>
        <div class="card">
          <h2>👨‍🎓 Students</h2>
          <p><?php echo 4500; ?></p>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
