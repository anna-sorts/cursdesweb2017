<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculadora</title>
</head>
<body>

<?php 
/**
* 
*/
class Calculadora
{
	function __construct()
	{
		self::$contador++;
	}
	public static function sumar($num1, $num2)
	{
		return $num1 + $num2;
	}

	public static function restar($num1, $num2)
	{
		return $num1 - $num2;
	}

	public static function multiplicar($num1, $num2)
	{
		return $num1 * $num2;
	}

	public static function dividir($num1, $num2)
	{
		return $num1 / $num2;
	}
}
$ent1 = 12;
$ent2 = 3;
echo "Entrada 1 = ".$ent1;
echo '<br>';
echo "Entrada 2 = ".$ent2;
echo '<br><br>';
echo "Suma = ".Calculadora::sumar($ent1, $ent2);
echo '<br>';
echo "Resta = ".Calculadora::restar($ent1, $ent2);
echo '<br>';
echo "Multiplicacio = ".Calculadora::multiplicar($ent1, $ent2);
echo '<br>';
echo "Divisio = ".Calculadora::dividir($ent1, $ent2);
echo '<br>';
echo "Comptador = ".Calculadora::comptador;

?>
	
</body>
</html>