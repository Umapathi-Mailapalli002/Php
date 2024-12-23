<?php
$uploadPth = "./files/".$_FILES['imageUpload']['name'];
if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $uploadPth)) {
    echo "file uploaded";
}else{
    die("Error on uploading file");
}
?>