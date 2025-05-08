<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP echo vs print</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #eef2f3;
            padding: 40px;
        }
        .container {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            max-width: 700px;
            margin: auto;
        }
        h1 {
            color: #222;
            text-align: center;
            margin-bottom: 30px;
        }
        .section {
            margin-bottom: 20px;
        }
        .output {
            background: #f1f8e9;
            padding: 12px;
            border-left: 6px solid #8bc34a;
            font-size: 1.05em;
            color: #333;
        }
        .label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Echo vs Print in PHP</h1>

        <?php
            $sad = "Ako si Eljohn.";
        ?>

        <div class="section">
            <div class="label">Using <code>echo</code>:</div>
            <div class="output">
                <?php
                    echo $sad, " Mao ni kalahian. ", "Echo can take multiple arguments.<br>";
                ?>
            </div>
        </div>

        <div class="section">
            <div class="label">Using <code>print</code>:</div>
            <div class="output">
                <?php
                    print "Mao sad ning print — only takes one argument.";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
