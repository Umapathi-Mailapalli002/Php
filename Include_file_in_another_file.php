<?php
//to include the files in another file in php
// there are four ways
/*
1. include
2. include_once
3.require
4.require_once
*/

//to add the helper page
// syntax:- include( 'file name' )
include( 'helper_page.php' );

//include_once is work if we add the include in a loop
//but we want the page at once then we should use include_once
for ( $i = 0; $i < 5; $i++ ) {

    // include( 'helper_page.php' );
    //this include the file 5 times
    include_once( 'helper_page.php' );
    //it prevent multiple rendering the page
}

//require vs include
/* The include and require statements are identical, except upon failure:

require will produce a fatal error ( E_COMPILE_ERROR ) and stop the script
include will only produce a warning ( E_WARNING ) and the script will continue

So, if you want the execution to go on and show users
 the output, even if the include file is missing, use
 the include statement. Otherwise, in case of 
 FrameWork, CMS, or a complex PHP application 
 coding, always use the require statement to include a key file
 to the flow of execution. This will help avoid compromising your application's security
 and integrity, just in-case one key file is accidentally missing.

Including files saves a lot of work. This means that you can create a standard header,
footer, or menu file for all your web pages. Then, when the header needs to be updated, 
you can only update the header include file.
*/
?>