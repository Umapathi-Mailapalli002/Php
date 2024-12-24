<?php
// echo file_get_contents("./files/dummy.txt","r");//both are same
// $file = fopen("./files/dummy.txt","r") or die("path not found");
// echo fread($file, filesize("./files/dummy.txt"));
if (isset($_FILES['file'])) {
    echo file_get_contents($_FILES['file']['tmp_name'],"r"); //this is also working fine
    // $filename = $_FILES['file']['tmp_name'];
    // $file = fopen($filename,"r") or die("path not found");
    // echo fread($file, filesize($filename));
}

?>
<!-- Assume data is comming from the server -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read file from Input/server</title>
</head>
<body>
<form  action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button name="button">Submit File</button>
</form>
</body>
</html>