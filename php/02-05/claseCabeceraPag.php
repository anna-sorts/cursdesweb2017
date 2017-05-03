<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  private $colorTexto;
  public function inicializar($titulo, $ubicacion, $colorTexto)
  {
    $this->titulo     = $titulo;
    $this->ubicacion  = $ubicacion;
    $this->colorTexto = $colorTexto;
  }
  public function graficar()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.';color:' . $this->colorTexto .'">';
    echo $this->titulo;
    echo '</div>';
  }
}

$cabecera=new CabeceraPagina();
$cabecera->inicializar('El blog del programador','center', '0CF');
$cabecera->graficar();
?>
</body>
</html> 