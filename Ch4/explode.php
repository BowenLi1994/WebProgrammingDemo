<?php
setcookie("fruits", "apple||banana", time() + 10);  // 10s expiration
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP explode() Example</title>
</head>
<body>
    <h2>Demonstration of explode() with Cookie</h2>

    <?php
    
    if (isset($_COOKIE["fruits"])) {
        $cookie_value = $_COOKIE["fruits"];
        $fruit_array = explode("||", $cookie_value);

        echo "<p>The cookie string is: <strong>$cookie_value</strong></p>";
        echo "<p>After using explode():</p>";

        echo "<ul>";
        echo "<li>First item: " . htmlspecialchars($fruit_array[0]) . "</li>";
        echo "<li>Second item: " . htmlspecialchars($fruit_array[1]) . "</li>";
        echo "</ul>";
    } else {
        echo "<p>Cookie not set yet. Please refresh the page.</p>";
    }
    ?>
</body>
</html>
