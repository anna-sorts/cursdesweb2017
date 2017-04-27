<!DOCTYPE html>
<html>
<body>
<h1>SUMA DE DOS NOMBRES</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Numero 1: <input type="number" name="num1" value="<?php echo ($_REQUEST['num1']) ?>">
  Numero 2: <input type="number" name="num2" value="<?php echo ($_REQUEST['num2']) ?>">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "Aixo es Post";
    // collect value of input field
    $num1 = htmlspecialchars($_REQUEST['num1']); 
    $num2 = htmlspecialchars($_REQUEST['num2']); 
    if (empty($num1) or empty($num2)) {
    	if (empty($num1)) {
    		echo "El numero 1 esta buit";
    		echo "<br>";
    	}
        if (empty($num2)) {
        	echo "El numero 2 esta buit";
        }
    } 

    else {
        echo $num1 + $num2;
    }

}
else {
	echo "Aixo es Get";
}

?>


</body>
</html>