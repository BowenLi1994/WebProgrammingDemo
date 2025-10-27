<!DOCTYPE html>
<html>
<head>
  <title>Cookies</title>
</head>
<body>

<?php
$value = "HelloCookie";
setcookie("MyCookie", $value, time() + 7200); // 2 hours
setcookie("AnotherCookie", $value, time() + 5); // 5 seconds
?>

<?php
if (!empty($_COOKIE)) {
    foreach ($_COOKIE as $key => $val) {
        echo $key . " => " . $val . "<br/>";
    }
} else {
    echo "No cookies yet! Refresh the page after setting them.<br/>";
}
?>

</body>
</html>
