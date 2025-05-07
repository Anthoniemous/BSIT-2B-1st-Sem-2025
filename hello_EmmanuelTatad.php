<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            padding: 30px;
            color: #333;
        }
        h2 {
            color: #2c3e50;
        }
        .info-box {
            background-color: #e0f7fa;
            border: 1px solid #00acc1;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
        }
        p {
            font-size: 16px;
        }
    </style>
</head>
<body>

<?php
$name = "Tatad";
$age = 22;


echo "<h2>Welcome, $name!</h2>","<div class='info-box'>","You are $age years old.<br>";


print "<p>Your name is <strong>$name</strong> and your age is <strong>$age</strong>.</p>";
print "</div>";
?>

</body>
</html>
