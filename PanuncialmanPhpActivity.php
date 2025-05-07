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
            color: yellow;
            padding: 50px;
            width: 120px;
        }
    </style>
</head>
<body>
    <?php
        echo "This is an Echo<br>"," And also this is an echo <br>", "you can also add a code and style it like this<br>","<div class=\"box\"> Box1 </div>";
        print "This is a Print, but can't deploy many arguments";
    ?>
</body>
</html>