<?php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP Session Example</title>
</head>

<body>
    <p>You have visited this page
        <?php
        echo $_SESSION['count'];
        ?> times.
    </p>
</body>
x
</html>