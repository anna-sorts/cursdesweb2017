<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// collect value of input field
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		//echo "hola";
		echo $num1 + $num2;
	}
	else {
		echo "Aquest programa nomes funciona amb el metode POST";
	}
?>