<?php
//$_REQUEST is supergloblavariable like $_GET and $_POST
//but it accepts both get and post methode forms
/* $_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data.

In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.

You can access this data with the $_REQUEST keyword followed by the name of the form field, or cookie, like this:

$_REQUEST['firstname'] */

//ex:- try to access the both forms data which we created in index.html file
print_r($_REQUEST);

//output
/* 
for get request
Array ( [username] => ravigaming [email] => rajkumar@gmail.com [password] => 12345 )

//for post request
Array ( [username] => ravi_mailapalli [email] => vikassmile160@gmail.com [password] => 12345 )
*/
echo "<br/>";
echo "<br/>";
if ($_REQUEST) {
   foreach($_REQUEST as $data){
    echo "$data <br>";
   }
}
?>