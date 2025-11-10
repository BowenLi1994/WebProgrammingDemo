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

<?php
if (isset($_POST["delete"])) {
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

<?php
$query = "SELECT id, name, age FROM students;";
$stmt = $conn->query($query);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Student ID</th>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Action</th>";
echo "</tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["age"] . "</td>";
    echo "<td><form method='POST'>\n";
    echo "<input type='hidden' name='id' value='" . $row["id"] . "'>\n";
    echo "<input type='submit' name='delete' value='Delete'>\n";
    echo "</td></form>";
    echo "</tr>";
}
echo "</table>";
$conn = null;
?>