<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
	table {
		width: 300px  !important;
	}

</style>
</head>
<body>
<?php $n = $_GET['n']; ?>


<table class="w3-table w3-striped w3-card-4" >
	<caption>Taula del <?php echo $n ?></caption>
	<tr>
		<th>Producte</th>
		<th>Resultat</th>
		<th>Parell/Senar</th>
	</tr>
	<?php for ($x = 0; $x <= 10; $x++): ?>

		<tr class='w3-hover-green'>
			<td>
				<?php echo $n ?> per <?php echo $x ?>
			</td> 
			<td>
				<?php echo $n * $x ?> 
			</td>
			<td>
				<?php if ($x % 2 == 0): ?> 
					Parell 
				<?php else: ?> 
					Senar 
				<?php endif ?>
			</td> 
		</tr>
	<?php endfor ?>
</table>

</body>
</html>
