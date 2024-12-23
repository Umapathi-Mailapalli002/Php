<?php
print_r($_POST);

if ($_POST) {
   echo "username is ". $_POST["username"];
   echo "<br/>";
   echo "email is ". $_POST["email"];
   echo "<br/>";
   echo "password is ". $_POST["password"];
}
?>