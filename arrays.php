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


echo "<br/>";
echo "<br/>";
echo "<br/>";
//Multidimensional Associative Array
$modals = array(
    array("brand" => "Ford", "model" => "Mustang", "year" => 2021, "price" => 55000),
    array("brand" => "Chevrolet", "model" => "Camaro", "year" => 2022, "price" => 62000),
    array("brand" => "Dodge", "model" => "Challenger", "year" => 2020, "price" => 48000),
    array("brand" => "Tesla", "model" => "Model S", "year" => 2023, "price" => 85000),
    array("brand" => "BMW", "model" => "M3", "year" => 2021, "price" => 70000),
    array("brand" => "Audi", "model" => "A5", "year" => 2022, "price" => 54000),
    array("brand" => "Mercedes", "model" => "C-Class", "year" => 2023, "price" => 68000),
    array("brand" => "Toyota", "model" => "Supra", "year" => 2021, "price" => 50000),
    array("brand" => "Nissan", "model" => "GT-R", "year" => 2022, "price" => 115000),
    array("brand" => "Porsche", "model" => "911", "year" => 2023, "price" => 150000)
);
echo "<pre>";
print_r($modals);
echo "</pre>";
echo "<br/>";
echo "<br/>";
//task is to show this data in table
    array_keys($modals[0]);
echo "<table border='1'>";
echo "<thead border= '1'>";
echo "<tr>";
echo "<th>";
echo "brand";
echo "</th>";
echo "<th>";
echo "model";
echo "</th>";
echo "<th>";
echo "year";
echo "</th>";
echo "<th>";
echo "price";
echo "</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";
for($i=0; $i < count($modals) ; $i++){
  echo "<tr>";
  foreach ($modals[$i] as $value) {
   echo "<td>";
   echo $value;
   echo "</td>";
  }
  echo "</tr>";
}
echo "<tbody>";
echo "</table>";

//task done
?>