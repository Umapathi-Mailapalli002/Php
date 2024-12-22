<?php 
//there are two scops 
/* 
1. Local variable 
2. Global variable
*/
//this name variable is access in all pages but in the function they
//access only local variable so we have to add the global

$name = "anil";
 function getName() {
    $name = "raju";
    echo "local variable $name";
 }
getName();
//output 
/* local variable raju => because it accepts the local variable */

echo "<br>";
function getName1() {
    // $name = "raju";
    global $name; // then it works
    //output
    /* local variable anil */
    echo "local variable $name";
 }
getName1();

//output
/* Warning: Undefined variable $name in C:\xampp\htdocs\Php\scope_of_variables.php on line 22
local variable  => get this error because to use the global variable then 
then we need to pass in argument otherwise add global keyword to variable
*/

echo "<br>";
function getName2($name) {
    // $name = "raju";
    echo "local variable $name";
 }
getName2($name);

//output

/* local variable anil => this also work well we pass the variable as a
argument
*/

?>