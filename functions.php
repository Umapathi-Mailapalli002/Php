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



?>