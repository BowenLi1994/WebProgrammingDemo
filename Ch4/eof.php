<!DOCTYPE html>

<html>

<head>
    <title>File EOF Test</title>
</head>

<body>
    <?php
    $handle = fopen("hello_world.txt", "r");
    $hello = fread($handle, 13);

    echo $hello . " <br /> ";           // Displays "Hello, world!"
    echo feof($handle) . " <br /> ";  // Displays "" (false)
    
    $five_more_chars = fread($handle, 5);

    echo $five_more_chars . " <br /> "; // Displays ""
    echo feof($handle) . " <br /> ";  // Displays "1" (true)
    
    fclose($handle);

    ?>
    <br>
</body>

</html>