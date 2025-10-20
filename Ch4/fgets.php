<!DOCTYPE html>

<html>

<head>
    <title>fgets: get one line</title>
</head>

<body>
    <?php
    $handle = fopen("milton.txt", "r");
    $lineNumber = 1;

    while ($line = fgets($handle)) {
        echo $lineNumber++ . ": $line <br /> ";
    }

    fclose($handle);
    ?>

    <br>

</body>

</html>