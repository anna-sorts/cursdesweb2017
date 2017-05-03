<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cabecera</title>
</head>
<body>
<?php 
	class Cabecera {
	  private $titulo;
	  public function __construct($tit)
	  {
	    $this->titulo=$tit;
	  }
	  public function graficar()
	  {
	    echo '<h1 style="text-align:center">'.$this->titulo.'</h1>';
	  }
	}
?>
</body>
</html>