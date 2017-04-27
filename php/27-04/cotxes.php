<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$cotxes = array('bmw'=>250, 'audi'=>300, 'seat'=>124, 'toyota'=>189, 'chevrolet'=>137);
		echo array_sum($cotxes); // suma els values de l'array

		echo "|";
		$sextoc = array(250=>'bmw', 300=>'audi', 124=>'seat', 189=>'toyota', 137=>'chevrolet');
		$arraySextocKeys = array_keys($sextoc);
		echo(array_sum($arraySextocKeys)); //suma les keys de l'array, fent un arrai de sols les keys
		
	 ?>
</body>
</html>

