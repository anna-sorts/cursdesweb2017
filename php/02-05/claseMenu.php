<html>
<head>
<title>Menus</title>
</head>
<body>
<?php
class Menu {
  private $enlaces = array();
  private $titulos = array();
  private $color = '#FFF';

  public function cargarOpcion($enlaces,$titulos)
  {
    $this->enlaces[] = $enlaces;
    $this->titulos[] = $titulos;
  }

  public function cargarColorFondo($color)
  {
    $this->color = $color;
  }

  private function mostrarHorizontal()
  {
    echo '<div style="padding:6px; font-family:verdana;background-color:' . $this->color . '">';
    for($f = 0; $f < count($this->enlaces); $f++)
    {
      echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
      if ($f != count($this->enlaces) - 1) {
        echo " | ";
      };
    }
    echo "</div>";
  }

  private function mostrarVertical()
  {
    echo '<div style="padding:6px; font-family:verdana;display:block; background-color:' . $this->color . '"><ul>';
    
    for($f = 0; $f < count($this->enlaces); $f++) {
      echo '<li><a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a></li>';
      
    }
    echo "</ul></div>";
  }

  public function mostrar($boolea)
  {
    if ($boolea == 0) {
      $this->mostrarHorizontal();
    }
    else {
      $this->mostrarVertical();
    }
  }

}

$menu1=new Menu();
$menu1->cargarOpcion('http://www.google.com','Google');
$menu1->cargarOpcion('http://www.yahoo.com','Yahoo');
$menu1->cargarOpcion('http://www.msn.com','MSN');
$menu1->cargarColorFondo('#00CCFF');
$menu1->mostrar(1);
$menu1->mostrar(0);
?>
</body>
</html>