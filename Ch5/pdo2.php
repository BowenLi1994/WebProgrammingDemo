<?php
require_once "connect_pdo.php";  // make sure this file sets up $conn as a PDO object

$query = "SELECT id, name, age FROM students;";

try {
    $stmt = $conn->query($query);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Age</th>";
    echo "</tr>";

    // Fetch and display all rows
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}

// ✅ Properly close PDO connection
$conn = null;
?>