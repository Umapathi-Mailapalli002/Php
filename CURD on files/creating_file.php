<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creating file dynamically</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="filename" placeholder="enter file name">
        <br><br>
        <label for="content">Content</label><br>
        <textarea name="content" id="content" ></textarea>
        <br><br>
        <button name='button' value="add">Add File</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['filename'])) {
     $fileName = "files/".$_POST['filename'].".txt";
    $content = $_POST['content'];
    $file = fopen($fileName,"w") or die("Unable to create file");
    if ($_POST['button'] == "add") {
        fwrite($file, $content);
        fclose($file);
        echo "file created successfully";
    }
    

}
   


    ?>