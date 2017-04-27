<!DOCTYPE html>
<html>
<body>

<?php
function test_odd($var)
{
return($var & 1);
}

$a1=array(5,6,2,3,4,7,9);
print_r(array_filter($a1,"test_odd"));
?>

</body>
</html>