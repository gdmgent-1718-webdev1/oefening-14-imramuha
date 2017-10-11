<?php

$colours = array ("goldenrod", "green", "violet");


for ($i = 0; $i < 9; $i++){
   
    for ($j = 0; $j < 9; $j++){
        echo "<div id=circle_{$colours[$i%3]}></div>";
    }
};




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Document</title>
</head>
<body>




    
</body>
