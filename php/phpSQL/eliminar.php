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

$sql = "DELETE FROM MyGuests WHERE id LIKE ".$_GET['id'];
if($conn->query($sql) === TRUE) {
	echo "Elemento borrado con éxito";
}
else {
	echo "Error borrando el elemento: ".$conn->error;
}

//$result = $conn->query($sql);
//$row = $result->fetch_assoc();
?>


<?php 
	$conn->close(); 
	header("Location: selectTabla.php");
?>
</body>
</html> 