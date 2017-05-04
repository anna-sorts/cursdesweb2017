<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Classe Persona i classe filla Empleat</title>
</head>
<body>
<?php 
/**
* 
*/
	abstract class Persona
	{	
		protected $nom;
		protected $edat;

		public function __construct($nom, $edat) 
		{
			echo "pare const ";
			$this->nom  = $nom;
    		$this->edat = $edat;
		}
		public function carregarNom($nom) 
		{
			$this->nom = $nom;
		}
		
		public function carregarEdat($edat) 
		{
			$this->edat = $edat;
		}

		public function imprimir() 
		{
			return strtoupper($this->nom) . " te " . $this->edat . " anys, "; // strtoupper transforma un string a majúscules

		}

	}
	class Empleat extends Persona
	{
		private $sou;

		public function __construct($nom, $edat, $sou) 
		{
			echo "filla const ";
			$this->sou  = $sou;
    		parent::__construct($nom,$edat);
		}

		public function carregarSou($sou) 
		{
			$this->sou = $sou;
		}

		public function imprimir() 
		{
			return parent::imprimir()." i guanya ".$this->sou."€ al mes. ";

		}
		
	}


	//$empleat = new Empleat();
	//$empleat->carregarNom("Pere");
	//$empleat->carregarEdat(34);
	//$empleat->carregarSou(1000);
	$empleat = new Empleat("Pere", 34, 1000);
	echo $empleat->imprimir();

?>
</body>
</html>