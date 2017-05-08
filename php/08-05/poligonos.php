<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Poligons</title>
</head>
<body>
	
<?php
/*
Empezaremos definiendo la jerarquia de clases
*/
class Poligono
{
  function calculo()
  {
  echo 'El area depende del tipo de poligono';
  }
}

class Cuadrado extends Poligono
{
  function calculo()
  {
  echo 'area de un cuadrado : a=l*l<br>';
  }
}

class Rectangulo extends Poligono
{
  function calculo()
  {
  echo 'area de un rectangulo : a=b*h<br>';
  }
}

class Triangulo extends Poligono
{
  function calculo()
  {
  echo 'area de un triangulo : a=(b*h)/2<br>';
  }
}
/* fin definicion de la jerarquia de clases */

/* 
definicion de la funcion encargada de realizar las llamada 
polimorfica al metodo "calculo"
A destacar que en la definicion de la funcion definimos el tipo 
parametro que pasamos por referencia, esto no es obligatorio 
en PHP, pero nos ayuda a entender el concepto y asi poder aplicarlo 
en otros lenguajes mas estrictos.
 */
function area(Poligono $obj)
{
  $obj->calculo();
}

/*
Creamos los objetos necesarios
*/
$cuadrado = new Cuadrado;
$rectangulo = new Rectangulo;
$triangulo = new Triangulo;

/*
Ejecutamos la funcion encargada 
de realizar la llamada polimorfica
*/
area($cuadrado);
area($rectangulo);
area($triangulo);
?>

</body>
</html>