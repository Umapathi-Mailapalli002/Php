<?php
require( 'config.php' );
echo "<br>";
try {
    $studentNames = $conn->prepare( 'SELECT * FROM students' );
    $studentNames->execute();
    echo "<select>";
    echo "<option>Select Name</option>";
    foreach ($studentNames as $key => $value) {
        echo "<option value=".$value['id'].">".$value['name']."</option>";
    }
} catch (PDOException $e) {

}
?>