<!DOCTYPE HTML>
<html>
<head>
<title>Save Dessert Shop</title>
<link rel="stylesheet" type ="text/css" href="mystyles.css" />
</head>
<body style="background-color:gray">
<div id="maindiv">

<?php
$newdata = implode ("|",$_POST);
file_put_contents("locationfile.txt", $newdata . "\n", FILE_APPEND);
print "Dessert Shop was successfully Saved! Go back <a href=index.html>home</a>.;"
?>
</div>
</body>
</html>

 