<!DOCTYPE html>

<html>

<head>
    <title>Executing on the Server Side</title>
</head>

<body>
    <?php
    echo $_SERVER['PHP_SELF']; // Returns the filename of the currently executing script    
    echo "<br>";
    echo $_SERVER['SERVER_NAME']; // Returns the name of the host server    
    echo "<br>";
    echo $_SERVER['HTTP_HOST']; // Returns the Host header from the current request    
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT']; // To check what sort of browser the visitor is using
    ?>

    <br>

</body>

</html>