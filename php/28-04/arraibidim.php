<!DOCTYPE html>
<html>
<body>

<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
?>
<?php $cotxesVenuts = 0; ?> 
<?php for ($row = 0; $row < 4; $row++): ?>
  <?php $cotxesVenuts += $cars[$row][2]; ?>
  <?php if ($cars[$row][1]> 10): ?>
  
    <p><b>Row number <?php echo $row; ?> </b></p>
    <ul>   
      <?php for ($col = 0; $col < 3; $col++): ?>
      <li>
        <?php  echo $cars[$row][$col]; ?>
      </li>
      <?php endfor ?>
    </ul>

  <?php endif ?>
<?php endfor ?>    
<p><b> <?php echo $cotxesVenuts; ?> </b></p>

</body>
</html>