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