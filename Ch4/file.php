<!DOCTYPE html>

<html>

<head>
    <title>File test</title>
</head>

<body>
    <?php
    echo "file test.txt exists? :";
    echo file_exists("test.txt"); // Returns the filename of the currently executing script
    echo "<br>";
    echo "file test2.txt exists? :";
    echo file_exists("test2.txt");
    echo "<br>";
    echo "size of test.txt: (bytes)";
    echo filesize("test.txt"); 
    echo "<br>";

    ?>

    <br>

</body>

</html>