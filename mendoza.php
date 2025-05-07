<!DOCTYPE html>
<html>
<head>
    <title>PHP Styled Output</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 30px;
            width: 400px;
            text-align: center;
        }
        .card h2 {
            color: #343a40;
        }
        .card p {
            font-size: 18px;
            color: #495057;
        }
    </style>
</head>
<body>

<?php
$name = "Apple";
$city = "Davao Oriental";
$hobby = "Photography";

echo "<div class='card'>,<h2>Hello, $name!</h2>";

print "<p>City: $city</p>";
print "<p>Hobby: $hobby</p>";

?>

</body>
</html>

