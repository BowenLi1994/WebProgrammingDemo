<?php
require_once "connect_pdo.php";
if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $query = "DELETE FROM students WHERE id = $id";
    echo ("<pre>\n" . $query . "\n</pre>\n");

    try {
        $conn->exec($query);
        echo "Employee deleted successfully.";
    } catch (PDOException $e) {
        echo $query . "<br>" . $e->getMessage();
    }
    $conn = null;
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Delete an Student</title>
</head>

<body>
    <h1>Delete a Student</h1>
    <form method="post">
        <p>ID to Delete:
            <input type="text" name="id">
        </p>
        <p><input type="submit" name="submit" value="Delete" /></p>
    </form>

</body>

</html>