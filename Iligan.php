<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .custom-echo{
            display: flex;
            align-items: center;
            justify-content: center;    
            padding: 20px;
            background-color: green;
            color: white;
            width: 120px;

        }
        .custom-print{
            display: flex;
            align-items: center;
            justify-content: center;    
            padding: 20px;
            background-color: red;
            color: white;
            width: 120px;

        }
    </style>
</head>
<body>
    <?php
        echo "This is an echo<br>","this is also an echo but in a single line of echo but multiple arguments<br>","using \"()\" is optional only<br>","Style for echo<br><div class=\"custom-echo\">My Custom Echo</div>";
        print "This is print<br>";
        print "This is also a print but in different line of print<br>";
        print "using \"()\" is optional only";
        print "Style for print<br><div class=\"custom-print\">My Custom Print</div>"
    ?>
</body>
</html>