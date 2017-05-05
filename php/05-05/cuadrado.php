<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cuadrado</title>
</head>
<body>
	
<?php 
class Quadrat {

	private $costat;
	private $perimetre;
	private $area;

	public function __construct($costat)
  	{
    	$this->costat = $costat;
    	$this->perimetre = 4*$this->costat;
    	$this->area = pow($this->costat, 2);
 	}

	 public function setCostat($costat)
	 {
	 	$this->__construct($costat);
	 }

	public function getPerimetre()
	{
		return $this->perimetre;
	}

	public function getArea()
	{
		return $this->area;
	}
}

$quadrat1 = new Quadrat(3);
echo "Perimetre Q1: " . $quadrat1->getPerimetre()."<br>";
echo "Area Q1: " . $quadrat1->getArea()."<br>";
$quadrat2 = $quadrat1;
$quadrat3 = clone($quadrat1);

$quadrat1->setCostat(5);
echo "Perimetre Q2: " . $quadrat2->getPerimetre()."<br>";
echo "Area Q2: " . $quadrat2->getArea()."<br>";

echo "Perimetre Q1: " . $quadrat1->getPerimetre()."<br>";
echo "Area Q1: " . $quadrat1->getArea()."<br>";

echo "Perimetre Q3: " . $quadrat3->getPerimetre()."<br>";
echo "Area Q3: " . $quadrat3->getArea()."<br>";
 ?>


 </body>
</html>