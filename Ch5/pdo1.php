<?php
require_once "connect_pdo.php";

try {
    $query = "SELECT id, name, age FROM students;";
    $stmt = $conn->query($query);

    echo "<pre>\n";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }
    echo "</pre>\n";
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>