<?php 
session_start();

$_COOKIE["name"]= "Shyam";

setcookie("name","shyam");

echo $_COOKIE["name"];
echo $_SESSION["email"];
echo $_SESSION["rePass"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>