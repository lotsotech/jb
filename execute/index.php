<?php

var_dump($_POST);

$myfile = fopen("json.txt", "w") or die("Unable to open file!");
$txt = $_POST;
fwrite($myfile, $txt);
fclose($myfile);

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Custom Journey Builder Activity - Execute</title>
</head>
<body>
Test HTML - Execute
</body>
</html>