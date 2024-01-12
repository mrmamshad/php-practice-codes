<?php
$myfile = fopen("welcome.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("welcome.txt"));
fclose($myfile);
?>

// fgets() = fgets() function is used to read a single line from a file.
// fgetc() =  fgetc() function is used to read a single character from a file