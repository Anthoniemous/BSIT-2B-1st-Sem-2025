<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .output-box {
            background-color: #ffffff;
            padding: 30px 50px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 1.5rem;
            color: #333;
        }

        .highlight {
            color: #007acc;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="output-box">
        <?php
        $value = print "<span class='highlight'>Gwapo pogi</span> ";
        echo $value;
        echo " Ako si <span class='highlight'>Breznev Cona Pogi</span>";
        ?>
    </div>
</body>
</html>
