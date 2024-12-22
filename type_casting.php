<?php
//to change one data type to another data type
//to string
$a = true;
$a = ( String ) $a;
var_dump( $a );
//output
/*
string( 1 ) '1'
*/

echo '<br/>';
//to boolean
$b = 5;
$b = ( Boolean ) $b;
var_dump( $b );
//output
/* bool( true ) => every time it returns true if 0 then it print false*/

echo '<br/>';
//to int
$c = '500';
$c = ( int ) $c;
var_dump( $c );

//output
/* int( 500 ) */

echo '<br/>';
//to float
$d = '500';
$d = ( float ) $d;
var_dump( $d );

//output
/* float( 500 ) */

echo '<br/>';
//to array
$e = 40;
$e = ( array ) $e;
var_dump( $e );

//output
/* array( 1 ) {
[ 0 ]=> int( 40 ) }
*/


echo '<br/>';
//to object
$e = 40;
$e = ( object ) $e;
var_dump( $e );

//output
/* object(stdClass)#1 (1) { ["scalar"]=> int(40) }
*/

echo '<br/>';
//to unset
// $e = 40;
// $e = ( unset ) $e;
// var_dump( $e );

//output we got error because the unset is not longer in php latest versions
/* Fatal error: The (unset) cast is no longer supported in C:\xampp\htdocs\Php\type_casting.php on line 63
*/

?>