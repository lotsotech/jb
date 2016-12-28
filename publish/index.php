<?php

var_dump($_POST);

$myfile = fopen("json.txt", "a") or die("Unable to open file!");
$txt = $_POST;
fwrite($myfile, $txt);
fclose($myfile);

?>
{response:"ok"}