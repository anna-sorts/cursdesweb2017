<html>
<head>
<title>Empleados</title>
</head>
<body>
<?php

class Empleado {
  private $nombre;
  private $sueldo;
  public function inicializar($nombre, $sueldo)
  {
    $this->nombre=$nombre;
    $this->sueldo=$sueldo;
  }
  public function imprimir()
  {
    echo $this->nombre . " ";
    if ($this->sueldo > 3000) {
      echo "debe pagar impuestos" . "<br>";
    }
    else {
      echo "no paga impuestos" . "<br>";
    }
  }
}

  $emp1=new Empleado();
  $emp1->inicializar('Juan', 2560);
  $emp1->imprimir();
  $emp2=new Empleado();  
  $emp2->inicializar('Ana', 3001);
  $emp2->imprimir();
 
?>
</body>
</html>