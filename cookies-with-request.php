<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies with request</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="enter the user name">
        <br><br>
        <button name="button" value="set">Set Cookie</button>
        <br><br>
        <button name="button" value="display">Get Cookie</button>
        <br><br>
        <button name="button" value="delete">Delete Cookie</button>
        <br><br>
       
    </form>
</body>
</html>
<?php
if (isset($_POST['button'])) {
    if ($_POST['button'] == "set") {
        $name = $_POST['user'];
        setcookie("user", $name, time()+86400);
        echo "<br/>";
        echo "Cookie set successfully $name";
    }elseif ($_POST['button'] == 'display') {
        echo $_COOKIE['user'];
        echo "<br/>";
        echo "Cookie fetched successfully";
    }else{
        if ($_POST['button'] == 'delete') {
            if ($_COOKIE) {
                setcookie("user", null, -1);
                echo "<br/>";
                echo "Cookie deleted successfully";
            }else{
                echo "no Cookies is there to delete";
            }
            
        }
        
    }
}
?>