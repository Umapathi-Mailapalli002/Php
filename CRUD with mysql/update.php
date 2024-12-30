<?php
require("config.php");
echo "<br>";


try {
    $id = $_GET['id'];
    $find = $conn->prepare("SELECT * FROM students WHERE id='$id'");
   $find->execute();
   $student = $find->fetch();
        echo "<input type='text' value='".$student['name'] . "'/>";
        echo "<br><br>";
        echo "<input type='text' value='".$student['stream'] . "'/>";
        echo "<br><br>";
        echo "<input type='text' value='".$student['cgpa'] . "'/>";
        echo "<br><br>";
} catch (PDOException $e) {
    echo "Error while fetching the student $e->getMessage()";
}


?>