<?php
//json => Javascript Object Notation
/* JSON stands for JavaScript Object Notation

JSON is a lightweight format for storing and transporting data

JSON is often used when data is sent from a server to a web page

JSON is "self-describing" and easy to understand 

JSON Example
This example defines an employees object: an array of 3 employee records (objects):

{
"employees":[
    {"firstName":"John", "lastName":"Doe"},
    {"firstName":"Anna", "lastName":"Smith"},
    {"firstName":"Peter", "lastName":"Jones"}
]
}
*/

$user = ["name" => "anil", "age" => 22, "email" => "anil@gmail.com"];
echo json_encode($user);// this is the inbuilt function in php to convert into json
//output
/* {"name":"anil","age":22,"email":"anil@gmail.com"} */
echo "<br/>";
//again to convert it to it's previous data type the use json_decode function
$data = '{"name":"anil","age":22,"email":"anil@gmail.com"}';
$data =  json_decode($data, true);//if we not add true then we get result in object
print_r($data);

?>