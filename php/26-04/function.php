<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

</style>
</head>

<body>

<?php function familyName($fname) {echo "$fname Refsnes.<br>";} ?>
<span>
<?php $noms = array("Jani", "Hege", "Stale", "Kai Jim", "Borge"); ?>
	<?php for ($x=0; $x < count($noms); $x++): ?>
		<!-- <?php if(substr($noms[$x], 0, 1) == "S"): ?> -->
			<span><?php familyName($noms[$x]) ?></span>
		<!-- <?php endif ?> -->
	<?php endfor ?>
</span>
	

<?php
// function familyName($fname) {
//     echo "$fname Refsnes.<br>";
// }

// familyName("Jani");
// familyName("Hege");
// familyName("Stale");
// familyName("Kai Jim");
// familyName("Borge");
?>

</body>
</html>

</body>
</html>
