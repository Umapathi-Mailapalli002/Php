<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session with request</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="enter the user name">
        <br><br>
        <button name="button" value="set">Set Session</button>
        <br><br>
        <button name="button" value="display">Get Session</button>
        <br><br>
        <button name="button" value="delete">Delete Session</button>
        <br><br>
       
    </form>
</body>
</html>
<?php
session_start();
if (isset($_POST['button'])) {
    if ($_POST['button'] == "set") {
        $val = $_POST['user'];
        $_SESSION['user']= $val;
    }
    if ($_POST['button'] == "display") {
       
       echo $_SESSION['user'];
    }
    if ($_POST['button'] == "delete") {
       
       session_destroy();
    }
}
?>