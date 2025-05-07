<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OUTPUT</title>
    <style>
        .echo-style {
            color: red;
            font-family: Arial;
            font-size: 24px;
            display: flex;
            justify-content: center;
            width: 400px;
            margin: 10px auto;
            margin-top: 220px;
            border: 1px solid #ccc;
        }

        .print-style {
            color: darkgreen;
            background-color: #f0f0f0;
            padding: 10px;
            font-style: italic;
            display: flex;
            justify-content: center;
            width: 400px;
            margin: 10px auto;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
        <?php
        echo "<div class='echo-style'>Hi I'm Ron Imran G. Parao (This is echo, echo is slightly faster and can output multiple strings).</div>";
        print("<div class='print-style'>Hi Ron! How are you? (This is print, print returns 1 and only outputs one string).</div>");
        ?>
</body>
</html>