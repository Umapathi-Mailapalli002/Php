<?php
/* An array is a special variable that can hold many values under a single name, 
and you can access the values by referring to an index number or name. 

In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays

Array items can be of any data type
$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);
*/

//we can add function in array

/* function myFunction() {
    echo "I come from a function!";
  }
  
  $myArr = array("Volvo", 15, myFunction);
  
  $myArr[2](); */
//Indexed Array
//in normal array it consist of index and values like shown in below
$array = [
    'nitin',
    20,
    'Bca'
];
echo '<pre>';
print_r( $array );
echo '</pre>';

//iterate the values
foreach($array as $item){
    echo $item;
    echo "<br>";
}

//this print like this. this is assign without key then its
//is called normal array with single dimension
/* Array
(
    [ 0 ] => nitin
    [ 1 ] => 20
    [ 2 ] => Bca
) */


echo "<br>";
echo "<br>";
//Assiociative Arrays
//in this we can add the keys for each values in arrays

$data = array("name" => "nitin", "age" => 20, "education" => "Bca");

//this we can also print with var_dump with its types
echo '<pre>';
var_dump($data);
echo '</pre>';
//output
/* array(3) {
    ["name"]=>
    string(5) "nitin"
    ["age"]=>
    int(20)
    ["education"]=>
    string(3) "Bca"
  } */


  echo "<br>";
  foreach($data as $key => $item):
  echo "$key is $item";
  echo "<br>";
  endforeach;

//output

/* name is nitin
age is 20
education is Bca */

//To add multiple items to an existing array, you can use the += operator.
/* 
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];
*/


echo "<br/>";
echo "<br/>";
//Multidimensional arrays
//nested arrays is called multidimensional arrays
//arrays in array 

/* 
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
*/

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

foreach($cars as $car){
  foreach($car as $item){
    echo "$item ";
  }
  echo "<br/>";
}


echo "<br/>";
//with for loop 
for ($i=0; $i < count($cars); $i++) { 
  for ($j=0; $j < count($cars[$i]); $j++) { 
    echo $cars[$i][$j]. " ";
  }
  echo "<br/>";
}
//output

/* Volvo 22 18
BMW 15 13
Saab 5 2
Land Rover 17 15 */
?>