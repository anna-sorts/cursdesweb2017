<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cosas Nazis</title>
</head>
<body>
<?php
	final class ItemProducto {
		final protected function suma($x, $y) {
			return $x + $y;
		}
	}
	class Producto extends ItemProducto {
	 function suma($x, $y) {
	 	return $x + $y;
	 }
}
?>
	
</body>
</html>