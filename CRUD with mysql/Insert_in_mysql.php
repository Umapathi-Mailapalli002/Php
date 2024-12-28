<?php
require( 'config.php' );
echo "<br>";
// with static data
// try {
//     $insertData = $conn->prepare( "INSERT INTO `students` (`name`, `stream`, `cgpa`) VALUES ('Raju', 'BCA', '8.8')" );
//     $insertData->execute();
//     echo "Inserted Data Successfully";
// } catch (PDOException $e) {
//     echo "Failed to insert data into table". $e->getMessage();
// }

if (isset($_POST["name"])) {
    try {
        $name = $_POST['name'];
        $stream = $_POST['stream'];
        $cgpa = $_POST['cgpa'];
        $insertData = $conn->prepare( "INSERT INTO `students` (`name`, `stream`, `cgpa`) VALUES ('$name', '$stream', '$cgpa')" );
        $insertData->execute();
        echo "Inserted Data Successfully";
    } catch (PDOException $e) {
        echo "Failed to insert data into table". $e->getMessage();
    }
}

//with dynamic data
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamically insert data in php</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="enter name"><br><br>
        <input type="text" name="stream" placeholder="enter stream"><br><br>
        <input type="text" name="cgpa" placeholder="enter cgpa"><br><br>
        <button>Add Student</button>
    </form>
</body>
</html>