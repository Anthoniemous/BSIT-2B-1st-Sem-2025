<?php
echo '<style>
    .echo-style {
        color: white;
        background-color: green;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
    }
    .print-style {
        color: darkblue;
        background-color: lightyellow;
        padding: 15px;
        border: 2px solid darkblue;
        font-size: 18px;
        font-family: "Courier New", Courier, monospace;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }
</style>';

echo '<div class="echo-style">This is an echo message with a green background and white text.</div>';

print '<div class="print-style">This is a print message with a yellow background and blue border.</div>';
?>
