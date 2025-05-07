<?php
// Using echo to output CSS
echo "<style>
    body {
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
        color: #333;
    }
    h1 {
        color: #0066cc;
    }
</style>";

// Using print to output HTML content styled by the CSS
print("<h1>Welcome to My Styled Page</h1>");
print("<p>This page is styled using inline CSS echoed from PHP.</p>");
?>
