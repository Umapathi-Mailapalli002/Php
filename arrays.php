<?php
/* An array is a special variable that can hold many values under a single name, 
and you can access the values by referring to an index number or name. 

In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays

*/

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

?>