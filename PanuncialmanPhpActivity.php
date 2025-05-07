<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo vs Print</title>
    <style>
        .box{
            display: flex;
            justify-content: center;
            background-color: red;
            font-size: 100px;
            color: yellow;
            padding: 50px;
            width: 400px;
        }
    </style>
</head>
<body>
    <?php
        echo "This is an Echo<br>"," And also this is an echo <br>", "you can also add a code and style it like this<br>","<div class=\"box\">★</div>";
        print "This is a Print, but can't deploy many arguments";
    ?>
</body>
</html>