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

$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests WHERE id LIKE ".$_GET['id'];
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<div class="w3-card-4">

		<header class="w3-container w3-teal">
		  <h1><?php echo $row['id'] ?></h1>
		</header>

		<div class="w3-container">
		  <p><?php echo $row['firstname'] ?></p>
		</div>
		<div class="w3-container">
		  <p><?php echo $row['lastname'] ?></p>
		</div>
		<div class="w3-container">
		  <p><?php echo $row['email'] ?></p>
		</div>
		<div class="w3-container">
		  <p><?php echo $row['reg_date'] ?></p>
		</div> 
		<footer class="w3-container w3-teal">
		  <h5><a class="button" href="selectTabla.php">Volver</a></h5>
		  
		</footer>

<!--<?php //$row = mysql_fetch_assoc($result) ?>
 <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
    	<header class="w3-container w3-teal"> 
        	<span onclick="document.getElementById('id01').style.display='none'" 
        	class="w3-button w3-display-topright">&times;</span>
        	<h2><?php //echo $row["id"] ?></h2>
    	</header>
    	<div class="w3-container">
    		<p><?php //echo $row["firstname"] ?></p>
    		<p><?php //echo $row["lastname"] ?></p>
    	</div>
      
    </div> -->
</div>

<?php $conn->close(); ?>
</body>
</html> 
