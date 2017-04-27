<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array("primer"=>"4", "segon"=>"6", "tercer"=>"2", "quart"=>"22", "cinque"=> "11");
krsort($numbers);


foreach($numbers as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
} 

?>

</body>
</html>