<!DOCTYPE html>

<html>

<head>
    <title>Copy and Unlink</title>
</head>

<body>
    <?php
    // Copy a file
    echo copy("hello_world.txt","hello_world_copy.txt");

    //Delete file
    unlink("hello_world_copy.txt");

    ?>
    <br>
</body>

</html>