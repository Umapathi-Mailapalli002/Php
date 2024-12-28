<?php
require("config.php");
echo "<br>";

$data = $conn->prepare("SELECT * FROM students");
$data->execute();
$students=$data->fetchAll();
echo "<table border=1>";
//table head
echo "<thead>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Stream</th>";
echo "<th>CGPA</th>";
echo "</tr>";
echo "</thead>";

//table body
echo "<tbody>";

foreach ($students as $student) {
    echo "<tr>";
    echo "<td>";
    echo $student['id'];
    echo "</td>";
    echo "<td>";
    echo $student['name'];
    echo "</td>";
    echo "<td>";
    echo $student['stream'];
    echo "</td>";
    echo "<td>";
    echo $student['cgpa'];
    echo "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>

<!-- alternate and improved one
<?php
require("config.php");

try {
    // Step 1: Fetch data from the database
    $data = $conn->prepare("SELECT * FROM students");
    $data->execute();
    $students = $data->fetchAll(PDO::FETCH_ASSOC); // Fetch as associative array

    // Step 2: Check if there are records
    if (count($students) > 0) {
        echo "<table border='1'>";

        // Step 3: Generate table headers dynamically
        echo "<thead><tr>";
        foreach (array_keys($students[0]) as $column) {
            echo "<th>" . htmlspecialchars(ucwords($column)) . "</th>";
        }
        echo "</tr></thead>";

        // Step 4: Generate table rows
        echo "<tbody>";
        foreach ($students as $student) {
            echo "<tr>";
            foreach ($student as $key => $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";

        echo "</table>";
    } else {
        echo "No records found.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage(); // Better to log this in production
}
?>
-->