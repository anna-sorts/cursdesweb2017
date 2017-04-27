<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
	function my_sort($a,$b) {
		if ($a%2==0 && $b%2==0) return 0;

		if ($a%2==0 && $b%2==1) return -1;
		else {return 1;}	
	}
	
	$a=array(4,2,5,8,6, 9);
	usort($a,"my_sort");

	$arrlength=count($a);
	for($x=0;$x<$arrlength;$x++) {
  	echo $a[$x];
  	echo "<br>";
  	}

?> 

</body>
</html>