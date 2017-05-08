<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Encendibles y tal</title>
</head>
<body>

<?php 

require_once("encendible.php");
require_once("canviMarxes.php");

class Bombilla implements Encendible{ 
   	public function encender(){ 
      	echo "<br>Y la luz se hizo..."; 
   	} 

   	public function apagar(){ 
      	echo "<br>Estamos a oscuras..."; 
   	} 
}

class Coche implements Encendible{ 
   	private $gasolina; 
   	private $marxa;
   	private $bateria; 
   	private $estado = "apagado"; 

   	function __construct(){
   	// coche instanciado! 
      	$this->gasolina = 0;
      	$this->marxa = 0;  
      	$this->bateria = 6; 
   	} 

   	public function encender(){ 
      	if ($this->estado == "apagado"){ 
         	if ($this->bateria > 0){ 
            	if ($this->gasolina > 0){ 
               	$this->estado = "encendido"; 
               	$this->bateria --; 
               	echo "<br><b>Enciendo...</b> estoy encendido!"; 
            	}
            	else{ 
               	echo "<br>No tengo gasolina"; 
            	} 
         	}
         	else{ 
            	echo "<br>No tengo batería"; 
         	} 
      	}
      	else{ 
         	echo "<br>Ya estaba encendido"; 
      	} 
   	} 

   	public function getMarxa() {
   		return $this->marxa;
   		   	}
   	public function apagar(){ 
      	if ($this->estado == "encendido"){ 
         	$this->estado = "apagado"; 
         	echo "<br><b>Apago...</b> estoy apagado!"; 
      	}
      	else{ 
         	echo "<br>Ya estaba apagado"; 
      	} 
   	} 

   	public function cargar_gasolina($litros){ 
      	$this->gasolina += $litros; 
      	echo "<br>Cargados $litros litros"; 
   	} 

   	public function cargar_bateria($energia){ 
      	$this->bateria += $energia; 
      	echo "<br>Cargada $energia % de la bateria"; 
   	}

   	public function anarEndavant() {
   		if ($this->estado == "encendido") {
   			return $this->marxa++;
   		}
   		else {
   			echo "<br> No se puede cambiar de marcha con el coche aparcado";
   		}
   		
   	}
}

$coche = new Coche();
$coche->cargar_gasolina(1);
for ($i = 0; $i < 7; $i++) {
	$coche->encender();
	$coche->anarEndavant();
	echo "<br>".$coche->getMarxa();
	$coche->apagar();
	
}
$coche->encender();

 ?>


</body>
</html>