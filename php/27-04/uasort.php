<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	function my_sort($a,$b)
	 {
	 	if($a < $b) {
	 		return -1;
	 	}
	 	else {
	 		return 1;
	 	}
	 }
	

	$arr=array("a"=>4,"b"=>2,"c"=>8,d=>"6");
	uasort($arr,"my_sort");
?>
</body>
</html>