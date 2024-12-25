<?php
$path = "files";
$items = scandir($path);
$items = array_diff($items, array(".",".."));
foreach ($items as $key => $value) {
   echo "<a href='./files/$value'>$value</a>";
   echo "<br/>";
}
//output
/* 
another file.txt
dummy.txt
new file

in this way we can fetch the directories
but the issue is we can't open this file 
to open this we need to add 'a' anchor tag
echo "<a href='./files/$value'>$value</a>";
*/
?>