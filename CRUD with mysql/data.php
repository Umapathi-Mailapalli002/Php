<?php
require('config.php');
$getStudents=$conn->prepare("Select * From students");
$getStudents->execute();
$getStudents=$getStudents->fetchAll();

print_r($getStudents);
?>