<?php
$json_string = file_get_contents('dischi.json'); //get the file.json and save it inside a variable
header('Content-type: application/json'); //must-do, place an header with the content-type
echo $json_string; //echo the variable in page, to be readable

?>