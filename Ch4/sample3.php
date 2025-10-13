<!DOCTYPE html>

<html>

<body>
    <h1>For each Page</h1>
    <?php
    $colors = array("blue", "yellow", "pink");	// indexed array
    
    foreach ($colors as $color) {
        echo $color; // simply prints each color
        echo " ";
    }
    echo "<br>";

    foreach ($colors as $indexno => $color) {
        echo "$indexno => $color"; // prints color with index
        echo " ";
    }

    echo "<br>";

    // associative array
    $myarray = array("foo" => "bar", "bar" => "foo");
    foreach ($myarray as $key => $value) {
        echo "$key => $value"; // prints values with key
        echo " ";
    }

    ?>
</body>

</html>