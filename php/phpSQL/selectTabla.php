<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQL cosas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		h4 {display: inline;}
		.dreta {float:right; margin:3px;}
	</style>
</head>
<body>
<?php 
	require_once("dadesconnexio.php");
?>

<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT id, firstname, lastname, email FROM MyGuests";
$result = $conn->query($sql);
?>


<div class="w3-container">
	<h2>Llista d'usuaris</h2>
	<?php if($result->num_rows > 0): ?>
		<h4>S'han trobat <?php echo $result->num_rows ?> usuaris</h4>
		<span class="w3-button w3-round-large w3-orange"><a id="afegir" href="insertar.php">Insertar usuari </a></span>
		<table class="w3-table-all w3-hoverable dreta">
		    <thead>
		    	<tr class="w3-light-grey">
			        <th>Id</th>
			        <th>Nom</th>
			        <th>Cognom</th>
			        <th>Email</th>
			        <th></th> 
			        <th></th>   
		    	</tr>
		    </thead>
		    <?php while($row = $result->fetch_assoc()): ?>
	    	<tr>
	    		<!-- <td><?php //echo $row["id"] ?></td> -->
	    		<td><a href="verUsuario.php?id=<?php echo $row['id'] ?>"><span class="w3-badge w3-green"><?php echo $row['id'] ?></span></a></td>
	    		<td><?php echo $row["firstname"] ?></td>
			    <td><?php echo $row["lastname"] ?></td>
			    <td><?php echo $row["email"] ?></td>
			    <td><a onclick="return confirm('Are you sure?')" id="esborrar" href="eliminar.php?id=<?php echo $row['id'] ?>"><span class="w3-button w3-round-large w3-red">Esborrar</span></a></td>
			    <td><a href="actualizar.php?id=<?php echo $row['id'] ?>"><span class="w3-button w3-round-large w3-green">Editar</span></a></td>
			</tr>
			<?php endwhile ?>
	    </table>
    <?php else:  ?>	
    	No s'han trobat resultats.
	<?php endif ?>
</div>

<?php $conn->close(); ?>
</body>
</html> 
