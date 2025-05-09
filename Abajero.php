<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP echo vs print</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-left: 5px solid #007BFF;
        }

        .print-box {
            border-left-color: #28A745;
        }

        .content {
            font-size: 1.1em;
            color: #333;
            margin-bottom: 10px;
        }

        .note {
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>

    <h1>PHP: echo vs print</h1>

    <div class="container">

        <div class="box">
            <div class="content">
                <?php
                    $he = "I'm Abajero.";
                    echo $he . " ";
                    echo "`echo` can output multiple strings and is slightly faster.";
                ?>
            </div>
        </div>

        <div class="box print-box">
            <div class="content">
                <?php
                    print "`print` returns a value (1) and only takes one argument.";
                ?>
            </div>
        </div>

    </div>

</body>
</html>
