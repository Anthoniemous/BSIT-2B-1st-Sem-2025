<?php
// Example product data
$products = [
    ["id" => 1, "name" => "Laptop", "price" => 50000],
    ["id" => 2, "name" => "Smartphone", "price" => 25000],
    ["id" => 3, "name" => "Headphones", "price" => 3000],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/dashboard.css">
    <title>Dashboard</title>
</head>
    <style>
        table { width: 100%; border-collapse: collapse; background: #fff; margin-top: 20px; box-shadow: 0 0 5px rgba(0,0,0,0.1); }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; vertical-align: top; }
        th { background-color: #f2f2f2; }
        img { max-width: 100px; height: auto; }
    </style>
<body>
   <div class="container">
    <!-- Aside Start -->
    <aside>
        <!-- top start -->
        <div class="top">
            <div class="logo">
                <h2>DOr<span class="primary">SU</span></h2>
            </div>
        </div>
        <div class="profile">
            <div class="info">
                <p><b>Phil</b></p>
                <small class="text-muted"></small>
            </div>
            <div class="profile-photo">
                <img src="assets/images/profile.jpg" alt="">
            </div>
        </div>
        <!-- top end -->
        <!-- navigation -->
        <div class="sidebar" id="nav-menu">
            <ul class="nav-list">
                <li><a href="#" class="nav_link"><h3>Dashboard</h3></a></li>
                <li><a href="enroll.php" class="nav_link"><h3>Insert Records</h3></a></li>
                <li><a href="manageinstructors.php" class="nav_link"><h3>Edit Records</h3></a></li>
                <li><a href="manageinstructors.php" class="nav_link"><h3>Delete Records</h3></a></li>
                <li><a href="changePassword.php" class="nav_link"><h3>Change Password</h3></a></li>
                <li><a href="index.php" class="nav_link"><h3>Logout</h3></a></li>
            </ul>
        </div>
    </aside>
    <!-- Aside End -->

    <main>
        <h1>Dashboard</h1>

        <!-- Start Insights -->
        <div class="insights">
            <!-- Total Products -->
            <div class="total-students">
                <div class="middle">
                    <div class="left">
                        <h3>Total Products</h3>
                        <h1>2,400</h1>
                    </div>
                    <div class="progress">
                        <svg><circle r="30" cy="40" cx="40"></circle></svg>
                        <div class="number">+156</div>
                    </div>   
                </div>
            </div>

            <!-- Total Sales -->
            <div class="faculty">
                <div class="middle">
                    <div class="left">
                        <h3>Total Sales</h3>
                        <h1>489</h1>
                    </div>
                    <div class="progress">
                        <svg><circle r="30" cy="40" cx="40"></circle></svg>
                        <div class="number">+2</div>
                    </div>   
                </div>
            </div>

            <!-- Active Customers -->
            <div class="active-students">
                <div class="middle">
                    <div class="left">
                        <h3>Active Customers</h3>
                        <h1>2,389</h1>
                    </div>
                    <div class="progress">
                        <svg><circle r="30" cy="40" cx="40"></circle></svg>
                        <div class="number">+152</div>
                    </div>   
                </div>
            </div>
        </div>
        <!-- End Insights -->

        <!-- Start Display -->
        <div class="display">
                <h1>Anime Search: Fullmetal (Fantasy, Drama)</h1>

                <?php
                $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://anime-db.p.rapidapi.com/anime?page=1&size=10&search=Fullmetal&genres=Fantasy%2CDrama&sortBy=ranking&sortOrder=asc",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => [
                        "x-rapidapi-host: anime-db.p.rapidapi.com",
                        "x-rapidapi-key: f21d751088msha7c98de8da676ebp151091jsn2b1d2be613b4"
                    ],
                ]);

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);
                    $data = json_decode($response, true);

                    if (!empty($data['data']) && is_array($data['data'])) {
                        echo "<table>";
                        echo "<thead><tr><th>Image</th><th>Title</th><th>Type</th><th>Rating</th><th>Synopsis</th></tr></thead><tbody>";

                        foreach ($data['data'] as $anime) {
                            echo "<tr>";
                            echo "<td><img src='" . htmlspecialchars($anime['image']) . "' alt='Anime Image'></td>";
                            echo "<td>" . htmlspecialchars($anime['title']) . "</td>";
                            echo "<td>" . htmlspecialchars($anime['type']) . "</td>";
                            echo "<td>" . htmlspecialchars($anime['synopsis']) . "</td>";
                            echo "</tr>";
                        }

                        echo "</tbody></table>";
                    } else {
                        echo "<p>No anime results found.</p>";
                    }
                ?>
        </div>
        <!-- End Display -->
    </main>
   </div>
</body>
</html>
