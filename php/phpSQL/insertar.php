<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQL cosas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$sql = "INSERT INTO MyGuests (firstname, lastname, email ) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."')";
	echo $sql."<br>";

	if($conn->query($sql) === TRUE) {
		echo "Elemento actualizado con éxito";
	}
	else {
		echo "Error actualizando el elemento: ".$conn->error;
	}
}
?>

<div class="w3-card-4">

		<header class="w3-container w3-teal">
		  <h1>Nou usuari</h1>
		</header>
		<form action="insertar.php" method="POST">
			<div class="w3-container">
				<p><input type="text" name="firstname" ></p>
			</div>
			<div class="w3-container">
				<p><input type="text" name="lastname"></p>
			</div>
			<div class="w3-container">
				<p><input type="email" name="email"></p>
			</div>
			
			<div class="w3-container">
				<p><input type="submit" value="Enviar"></p>
			</div> 
			<footer class="w3-container w3-teal">
				<h5><a class="button" href="selectTabla.php">Tornar enrere</a></h5>
			</footer>
		</form>
<?php 
	$conn->close(); 
	
?>
</body>
</html> 