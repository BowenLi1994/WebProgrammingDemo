<?php
require_once "connect_pdo.php";
if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $query = "INSERT INTO students (id, name, age)  VALUES ('$id', '$name', '$age');";
    echo ("<pre>\n" . $query . "\n</pre>\n");
    try {
        $conn->exec($query);
        echo "Student added successfully.";
    } catch (PDOException $e) {
        echo $query . "<br>" . $e->getMessage();
    }
    $conn = null;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add new student</title>
</head>

<body>
    <h1>Add a new student</h1>
    <form action="" method="post">
        <p>ID:<input type="text" name="id" autocomplete="off"></p>
        <p>Name:<input type="text" name="name" autocomplete="off"></p>
        <p>Age: <input type="text" name="age" autocomplete="off"></p>
        <p><input type="submit" name="submit" value="Add" /></p>

    </form>

</body>

</html>