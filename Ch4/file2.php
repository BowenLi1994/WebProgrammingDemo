<!DOCTYPE html>

<html>

<head>
    <title>File test</title>
</head>

<body>
    <?php
    $handle = fopen("test.txt", "r");
    $data = fread($handle, 10);
    echo "data is: ";
    echo $data;
    echo "<br>";
    $data = fread($handle, 10);
    echo "data is: ";
    echo $data;
    echo "<br>";


    // $one_char = fgetc($handle);
    // echo "one char is: ";
    // echo $one_char;
    





    fclose($handle);
    ?>

    <br>

</body>

</html>