<?php
/*
Several predefined variables in PHP are "superglobals", which means they are available in all scopes throughout a script. There is no need to do global $variable; to access them within functions or methods.

These superglobal variables are:

$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV 

Since PHP 5.4, you cannot use a superglobal as 
the parameter to a function. This causes a fatal error:

function foo($_GET) {
  // whatever
}

It's called "shadowing" a superglobal, and I don't know why
 people ever did it, but I've seen it out there. 
 The easy fix is just to rename the variable $get in the function, assuming 
 that name is unique. 
 */

?>