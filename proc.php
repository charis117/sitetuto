<?php

$file = fopen("database.txt","a+");

$email = $_SERVER; 

fwrite($file,$email);
fclose($file); 
print_r(error_get_last());

?>
