<?php

include("LIB_http.php");

$target = "http://www.schrenk.com/publications.php";
$ref = "http://www.schrenk.com";

$return_array = http_header($target,$ref);

echo "FILE CONTENTS \n";
var_dump($return_array['FILE']);

echo "ERRORS  \n";
var_dump($return_array['ERROR']);

/*$file_handle = fopen($target,"r");

while(!feof($file_handle))
{
	echo fgets($file_handle,4096);
}
fclose($file_handle);*/
?>