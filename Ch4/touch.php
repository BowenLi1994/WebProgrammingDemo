<!DOCTYPE html>

<html>

<head>
    <title>Copy and Unlink</title>
</head>

<body>
    <?php
    $filename = "test.txt";
    touch($filename, time() - 3600, time() - 7200);

    echo filemtime($filename), PHP_EOL; // 1 hour ago
    echo "<br>";
    echo date_default_timezone_get();
    echo "<br>";
    echo "Content last changed: " . date("F d Y H:i:s.", filemtime($filename));
    echo "<br>";
    echo fileatime($filename), PHP_EOL; // 2 hours ago
    
    ?>
</body>

</html>