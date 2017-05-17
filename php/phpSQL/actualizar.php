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
	//$sql = "UPDATE MyGuests SET firstname='".$_POST["firstname"]."', lastname='".$_POST["lastname"]."', email='".$_POST["email"]."' WHERE id = ".$_POST['id'];
	//o bien:
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('".$firstname."'), ('".$lastname."'), ('".$email."')";
	echo $sql."<br>";
	$aux = $conn->query($sql);

	if($aux === TRUE) {
		echo "Elemento actualizado con éxito";
		$last_id = $conn->insert_id;
		header("Location: actualizar.php?id=".$last_id);
	}
	else {
		echo "Error actualizando el elemento: ".$conn->error;
	}
}

$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests WHERE id = ".$_GET['id'];
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<div class="w3-card-4">

		<header class="w3-container w3-teal">
		  <h1><?php echo $row['id'] ?></h1>
		</header>
		<form action="actualizar.php?id=<?php echo $row['id'] ?>" method="POST">
			<div class="w3-container">
				<p><input type="text" name="firstname" value="<?php echo $row['firstname'] ?>"></p>
			</div>
			<div class="w3-container">
				<p><input type="text" name="lastname" value="<?php echo $row['lastname'] ?>"></p>
			</div>
			<div class="w3-container">
				<p><input type="email" name="email" value="<?php echo $row['email'] ?>"></p>
			</div>
			<div class="w3-container">
				<p><input type="hidden" name="id" value="<?php echo $row['id'] ?>"></p>
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