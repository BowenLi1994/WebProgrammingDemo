<!DOCTYPE html>

<html>


<body>
    <?php
    $x = 2;
    while ($x < 1000) {
        echo $x . "\n"; // \n is newline character
        $x = $x * $x;
    }
    echo "<br>";
    $colors = array("blue", "yellow", "pink");
    foreach ($colors as $color) {
        echo $color . "\n";
    }
    echo "<br>";
    unset($colors[1]);

    print_r($colors);

    $colors=array_values($colors);
    echo "<br>";
    print_r($colors);


    ?>
</body>

</html>