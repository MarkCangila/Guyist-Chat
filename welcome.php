<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
fwrite($myfile, $name);
fwrite($myfile, $message);
?>
