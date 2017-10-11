<?php

$colours = array ("goldenrod", "green", "violet");



for ($i = 1; $i < 10; $i++) {
	for ($j = 1; $j < 10; $j++) {
		if ($i == $j) {
			$colour = $colours[0];
		} else if ($j < $i) {
			$colour = $colours[1];
		} else {
			$colour = $colours[2];
		}
		echo "<div id=circle_{$colour}></div>";
	}
}




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
