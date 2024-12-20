<?php
//functions in php
function funciton_name() {
    echo "Hi, this is virat <br>";
}

//call function to exicute
funciton_name();

//function with return this also same like echo but it return the value
    function return_function() {
        return "Hi, this is function with return <br>";
    }
   echo return_function();

//function with parameter
function function_with_parameter($name, $age){
    return "Hi, iam $name and age $age";
}
echo function_with_parameter("Elon Musk", 55);

echo "<br>";
//function with default parameter
function function_with_default_parameter($fruit, $color = "red"){
    return "$fruit and color is $color";
}
echo function_with_default_parameter("apple", "red");
echo "<br>";

//if we do not pass any then it show error show we can overcome this with default parameter
echo function_with_default_parameter("apple");
echo "<br>";

//if we pass in the default parameter then it overwrite the existing one
echo function_with_default_parameter("apple", "green");

echo "<br>";
echo "<br>";
echo "<br>";
echo "<h2>Nested functions</h2>";
//nested function
function parent_function(){
    echo "this is parent function <br>";
    function child_function(){
        echo "this is child function";
    }
    child_function();// call the child function inside the parent
}
//if we call like this then it work and both were called successfully
// parent_function();
// echo "<br>";
// child_function();

//it's fine this we can call the child functions inside the parent function
parent_function();

//if we call like this child first and parent second then it Fatal error
// child_function();
// echo "<br>";
// parent_function();
/*
Fatal error: Cannot redeclare child_function() 
(previously declared in C:\xampp\htdocs\Php\functions.php:45)
 in C:\xampp\htdocs\Php\functions.php on line 44
*/
?>