<!-- Anna Senen 73391837-X -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercici 1</title>
</head>
<body>
	
<?php
$upperS = ord("S");
$lowerS = ord("s");
$suma = "";

$myfile = fopen("dictionary.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
	$lineOfText = fgets($myfile);
	if (ord("$lineOfText") == $upperS OR ord("$lineOfText") == $lowerS) {
		$suma.= $lineOfText."<br>";
	}
}
echo $suma;

fclose($myfile);

?>
</body>
</html>
