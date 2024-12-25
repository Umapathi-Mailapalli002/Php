<?php
echo date("d m y");//if we add the in small case letters then we got date in number formates
//output
//25 12 24
echo "<br>";
echo date("D M Y");//then we got in letters format
//output
//Wed Dec 2024

//we can fetch the time zone which is set
echo "<br>";
echo date_default_timezone_get();
//output => Europe/Berlin this is the time zone setted
echo "<br>";
//if we echo the hours then 
echo date("h");// output => 06 but currently time is 10 am 
// this because of time zone in europe theres time is 6 so it print 06

//then we set our time zone to match our current time
echo "<br>";
echo date_default_timezone_set("Asia/Kolkata");
echo "<br>";
echo date_default_timezone_get();
echo "<br>";
echo date("h");//small letters for 12 hrs format
//now this print 10

echo "<br>";
echo date("H");// capital letter for 24 hrs format
//now this print 10
echo "<br>";
echo date("h:i:s"); //for current time then it not show am/pm
//output => 11:01:16
echo "<br>";
echo date("h:i:sa"); //if add a after s then it show am/pm
//output => 11:01:16am

?>