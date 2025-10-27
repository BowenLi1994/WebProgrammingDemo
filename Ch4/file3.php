<!DOCTYPE html>

<html>

<head>
    <title>File test</title>
</head>

<body>
    <?php
    $handle = fopen("test.txt", "w");
    fwrite($handle, "ABCxyz");
    fwrite($handle, "ABCxyz");
    fclose($handle);
    ?>
    <br>

</body>

</html>