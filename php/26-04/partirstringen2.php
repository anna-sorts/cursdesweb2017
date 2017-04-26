<!DOCTYPE html>
<html>
<body>

<?php

$str = "Hola_que_tal?";

echo substr($str, 0, strlen($str)/2);
echo "<br>";
echo substr($str, strlen($str)/2);

?>

</body>
</html>