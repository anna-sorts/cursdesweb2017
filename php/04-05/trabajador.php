<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Treballador</title>
</head>
<body>
<?php 
	abstract class Treballador{
		protected $nom;
		protected $sou;

		public abstract function calcularSou(); 
		
		function __construct($nom, $sou)
		{
			$this -> nom = $nom;
			$this -> sou = $sou;
		}
		public function imprimir() 
		{
			return "Nom:".$this->nom."  Sou: ".$this->sou. "<br>";
		}
	}
	/**
	*/
	class Empleat extends Treballador
	{
		private $horesTreballades;
		private $valorHora;

		function __construct($nom, $horesTreballades, $valorHora = 11)
		{
			$this -> nom = $nom;
			$this->horesTreballades = $horesTreballades;
			$this->valorHora = $valorHora;
		}

		public function calcularSou() 
		{
			$this->sou = $this->horesTreballades * $this->valorHora;
		}
		
	}

	class Gerent extends Treballador
	{
		private $percentatge;
		private $utilitats;
		function __construct($nom, $utilitats, $percentatge = 0.1)
		{
			$this -> nom = $nom;
			$this->percentatge = $percentatge;
			$this->utilitats = $utilitats;
		}

		public function calcularSou() 
		{
			$this->sou = $this->percentatge * $this->utilitats;
		}
	}

$empleat1 = new Empleat("Joan", 145);
$empleat3 = new Empleat("Joan2", 145, 13);
$empleat2 = new Empleat("Maria", 160);
$gerent1  = new Gerent("Paco", 21000);
$empleat1->calcularSou();
$empleat2->calcularSou();
$empleat3->calcularSou();
$gerent1->calcularSou();
echo $empleat1->imprimir();
echo $empleat3->imprimir();
echo $empleat2->imprimir();
echo $gerent1->imprimir();
 ?>
</body>
</html>