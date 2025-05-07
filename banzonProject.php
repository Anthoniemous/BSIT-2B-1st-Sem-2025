<!DOCTYPE html>
<html>
<head>
    <title>PHP echo vs print</title>
</head>
<body>
    <h2> echo vs print </h2>
    <?php
    echo "<strong>Using echo:</strong><br>";
    echo "This is output using echo.<br>";
    echo "Echo can take", " multiple", " parameters.<br>";

    print "<br><strong>Using print:</strong><br>";
    print "This is output using print.<br>";
    print "<br><strong>Return value demonstration:</strong><br>";
    $printReturn = print "Print returns 1, so this is displayed.<br>";
    echo "The return value of print is: $printReturn<br>";
    ?>
</body>
</html>
