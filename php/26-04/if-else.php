<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H"); /* la variable $t dona l'hora del server */


if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
 
</body>
</html>