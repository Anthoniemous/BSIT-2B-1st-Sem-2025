<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Admin</h2>
            </div>
            <ul class="sidebar-nav">
                <li><a href="registration.html">Admin Registration</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </aside>

        <main class="main-content">
            <header class="top-nav">
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                </div>
                <div class="user-info">
                    <img src="profile.jpg" alt="User" class="user-avatar">
                    <span>Jin Woo</span>
                </div>
            </header>

            <section class="dashboard-cards">
                <div class="card">
                    <h3>Active Users</h3>
                    <p>1,245</p>
                </div>
                <div class="card">
                    <h3>Difficulty Level</h3>
                    <p>999</p>
                </div>
                <div class="card">
                    <h3>Reward Quest</h3>
                    <p>$12,500,000</p>
                </div>
                <div class="card">
                    <h3>Messages</h3>
                    <p>345</p>
                </div>
            </section>

            <section class="recent-activities">
                <h2>Recent Quest</h2>
                <ul>
                    <li>User "Alice" signed up</li>
                    <li>Quest #2378 completed</li>
                    <li>Message from "Bob" received</li>
                    <li>User "Eve" changed password</li>
                </ul>
            </section>
        </main>
    </div>
</body>
</html>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    display: flex;
    min-height: 100vh;
    background-color: #f4f6f9;
}

.container {
    display: flex;
    width: 100%;
}

.sidebar {
    width: 250px;
    background-color: #333;
    color: #fff;
    padding: 20px;
}

.sidebar-header h2 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 24px;
    font-weight: bold;
}

.sidebar-nav {
    list-style: none;
    padding: 0;
}

.sidebar-nav li {
    margin-bottom: 20px;
}

.sidebar-nav li a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    display: block;
    padding: 10px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.sidebar-nav li a:hover {
    background-color: #555;
}

.main-content {
    flex: 1;
    padding: 20px;
}

.top-nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff;
    padding: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.search-bar input {
    padding: 8px 12px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.user-info {
    display: flex;
    align-items: center;
}

.user-avatar {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    margin-right: 10px;
}

.dashboard-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.card {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.card h3 {
    margin-bottom: 10px;
    font-size: 18px;
    color: #333;
}

.card p {
    font-size: 24px;
    font-weight: bold;
    color: #007bff;
}

.recent-activities {
    margin-top: 40px;
}

.recent-activities h2 {
    font-size: 22px;
    margin-bottom: 20px;
}

.recent-activities ul {
    list-style: none;
    padding: 0;
}

.recent-activities li {
    background-color: #fff;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
}

.recent-activities li:hover {
    background-color: #f1f1f1;
}

@media (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        height: auto;
        padding: 15px;
    }

    .top-nav {
        flex-direction: column;
        align-items: flex-start;
    }

    .search-bar input {
        width: 100%;
    }

    .dashboard-cards {
        grid-template-columns: 1fr;
    }
}

</style>