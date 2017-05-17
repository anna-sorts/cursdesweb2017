<!-- Anna Senen 73391837-X -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercici 2</title>
<style>
	body {
		font-family: verdana;
		font-size: 0.8em;
	}
	.usuaris {
		width:300px;
		padding: 5px;
		border: 1px solid #1E90FF;
		border-radius: 3px;
		background-color: #1E90F0;
	}
	.admins {
		width:300px;
		padding: 5px;
		border: 1px solid #90EE99;
		border-radius: 3px;
		background-color: #90EE90;
	}
	.panels {
		width:150px;
		text-align: center;
		padding: 10px;
		border: 1px solid red;
		border-radius: 3px;
		background-color: white;
		margin: 5px;
	}
	.alert {
		background-color: red;
		color: white;
	}

</style>
</head>
<body>

<?php 
class Usuari {
	protected $nom;
	protected $password;

	public function __construct($nom, $pass)
	{
		$this->nom = $nom;
		$this->password = $pass;
	}

	public function getNom() 
	{
		return $this->nom;
	}

	public function setNom($nom) 
	{
		$this->nom = $nom;
	}

	public function getPassword() 
	{
		return $this->password;
	}

	public function setPassword($pass) 
	{
		$this->password = $pass;
	}
	public function saludar()
	{
		echo "Hola soc el ".$this->nom;
	}
}

class Administrador extends Usuari {
	
	
	public function banejar($nomUsuari)
	{
		return $nomUsuari." ha estat banejat.";
	} 

}

$usu1 = new Usuari('Joan', 123);
$admin1 = new Administrador('Jose', 666);
?>

<div class="usuaris">
	<?php 
		echo "Usuari 1 -> Nom: ".$usu1->getNom();
		echo "<br>";
		echo "Usuari 1 -> Contrasenya: ".$usu1->getPassword();
		echo "<br>";
	 ?>
</div>
<div class="panels">
	<?php
		echo $usu1->saludar(); 
	 ?>
</div>
<div class="admins">
	<?php 
		echo "Admin -> Nom: ".$admin1->getNom();
		echo "<br>";
		echo "Admin -> Contrasenya: ".$admin1->getPassword();
		echo "<br>";
	 ?>
</div>
<div class="panels alert">
	<?php echo $admin1->banejar('Joan'); ?>
</div>
 

</body>
</html>