<html>
<head>
<title>Personas</title>
</head>
<body>
<?php
class Persona {
  private $nombre;
  
  public $edad;
  public function inicializar($nombre, $edad)
  {
    $this->nombre=$nombre;
    $this->edad=$edad;
  }
  public function imprimir()
  {
    echo $this->nombre;
    echo ' tiene ';
    echo $this->edad;
    echo '<br>';
  }

  public function afegir($edad)
  {
    
    echo $edades;
  }
}

  $edadTotal = 0;
  $a = array();
  $per1=new Persona();
  $per1->inicializar('Juan', 27);
  $per1->imprimir();
  array_push($a, $per1);

  $per2=new Persona();  
  $per2->inicializar('Ana', 41);
  $per2->imprimir();
  array_push($a, $per2);

  foreach ($a as $persona) {
    $edadTotal += $persona->edad;
  }
  echo $edadTotal;

?>
</body>
</html>