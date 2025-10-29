<?php


setcookie("username", "Bowen Li", time()+ 3600); // 1 hour expiration
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP → JavaScript Example</title>
</head>

<body>
    <h2>Passing data from PHP to JavaScript</h2>

    <script>
        var match = document.cookie.match(/username=([^;]+)/);
        if (match) {
            var username = decodeURIComponent(match[1]);
            document.write("<p>Hello, " + username + "!</p>");
        } else {
            document.write("<p>Cookie not found. Try refreshing the page.</p>");
        }
    </script>
</body>

</html>