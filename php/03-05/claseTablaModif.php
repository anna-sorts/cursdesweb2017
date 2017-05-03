<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
include("celda.php");

class Tabla {
  private $mat=array();
  private $cantFilas;
  private $cantColumnas;

  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }

  public function cargar($fila,$columna, $celda)
  {
    $this->mat[$fila][$columna]=$celda;
  }

  private function inicioTabla()
  {
    echo '<table border="1">';
  }
    
  private function inicioFila()
  {
    echo '<tr>';
  }

  public function mostrar($fi,$co)
  {
    echo $this->mat[$fi][$co]->mostrarCelda();
  }

  private function finFila()
  {
    echo '</tr>';
  }

  private function finTabla()
  {
    echo '</table>';
  }

  public function graficar()
  {
    $this->inicioTabla();
    $contador = 0;

    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
        
        $this->cargar($f,$c,++$contador);
        $this->mostrar($f,$c);

      }
      $this->finFila();
       
    }
    $this->finTabla();
  }
}

$fils = 13;
$cols = 21;
$contador = 0;
$tabla1 = new Tabla($fils,$cols);

for($f=1;$f<=$fils;$f++)
{
  for($c=1;$c<=$cols;$c++)
  {
    $celda = new Celda($contador, "#F00", "#CCC");
    $tabla1->cargar($f, $c, $celda);
    $contador++;
  }
}


$tabla1->graficar();
?>
</body>
</html> 