<html>
<head>
<title>Pagina</title>
</head>
<body>
<?php
include("cabecera.php");


class Cuerpo {
  private $lineas=array();
  public function insertarParrafo($li)
  {
    $this->lineas[]=$li;
  }
  public function graficar()
  {
    for($f=0;$f<count($this->lineas);$f++)
    {
      echo '<p style="padding:0px;margin:1px;font-family:monospace">'.$this->lineas[$f].'</p>';
    }
  }
}

class Pie {
  private $titulo;
  public function __construct($tit)
  {
    $this->titulo=$tit;
  }
  public function graficar()
  {
    echo '<h4 style="text-align:center">'.$this->titulo.'</h4>';
  }
}

class Pagina {
  private $cabecera;
  private $cuerpo;
  private $pie;
  public function __construct($texto1,$texto2)
  {
    $this->cabecera=new Cabecera($texto1);
    $this->cuerpo=new Cuerpo();
    $this->pie=new Pie($texto2);
  }
  public function insertarCuerpo($texto)
  {
    $this->cuerpo->insertarParrafo($texto);
  }
  public function graficar()
  {
    $this->cabecera->graficar();
    $this->cuerpo->graficar();
    $this->pie->graficar();
  }
}

$pagina1=new Pagina('Titulo de la Pagina','Pie de la pagina');
$pagina1->insertarCuerpo('Esto ** una prueba que debe aparecer dentro del cuerpo de la pagina 1');
$pagina1->insertarCuerpo('Esto es *** prueba que debe aparecer dentro del cuerpo de la pagina 2');
$pagina1->insertarCuerpo('Esto es una ****** que debe aparecer dentro del cuerpo de la pagina 3');
$pagina1->insertarCuerpo('Esto es una prueba *** debe aparecer dentro del cuerpo de la pagina 4');
$pagina1->insertarCuerpo('Esto es una prueba que **** aparecer dentro del cuerpo de la pagina 5');
$pagina1->insertarCuerpo('Esto es una prueba que debe ******** dentro del cuerpo de la pagina 6');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer ****** del cuerpo de la pagina 7');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro *** cuerpo de la pagina 8');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del ****** de la pagina 9');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo ** la pagina 10');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de ** pagina 11');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la ****** 12');
$pagina1->insertarCuerpo('Esto es una prueba que debe aparecer dentro del cuerpo de la pagina **');
$pagina1->graficar();
?>
</body>
</html>