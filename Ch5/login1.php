<?php
require_once "connect_pdo.php";
if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $query = "SELECT * FROM students WHERE id = '$id' AND name = '$name';";
    echo "<br>";
    print_r($query);
    echo "<br>";
    try {
        $stmt = $conn->query($query);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($row);
        if ($row === false) {
            echo "<p>Login incorrect.</p>";
        } else {
            echo "<p>Login success.</p>";
        }
    } catch (PDOException $e) {
        echo $query . "<br>" . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h4>Please Login</h4>
    <form action="" method="post">
        <p>ID: <input type="text" name="id" autocomplete="off"></p>
        <p>Name:<input type="text" name="name" autocomplete="off"></p>
        <p><input type="submit" name="submit" value="Login" /></p>
    </form>
</body>

</html>