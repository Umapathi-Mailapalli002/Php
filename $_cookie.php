<?php
setcookie("fruit", "apple", time()+86400, "/");
if (isset($_COOKIE['fruit'])) {
   echo "cookie is ". $_COOKIE['fruit'];
}else{
    echo "Cookie is not set";
}
?>