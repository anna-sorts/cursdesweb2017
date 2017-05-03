<html>
<head>
<title>Coches</title>
</head>
<body>
<?php
class Car {

  // The private access modifier denies access to the 
  // method from outside the class’s scope 
  private $model;
  private $allowedModels = array("Volvo", "BMW", "Toyota", "Mercedes");
  // The public access modifier allows the access to 
  // the method from outside the class 
  public function __construct($model) {
    { 
        $this->model = $model; 
    } 
  }

  public function setModel($model) { 

  // Validate that only certain car models are assigned 
  // to the $carModel property 
    if(in_array($model,$this->allowedModels)) 
      { 
        $this->model = $model; 
      } 
  }

  public function getModel() 
  { 
    return "The car model is " . $this->model;
  }
}

$mercedes = new Car("Mercedes");
// Set the car’s model 
//$mercedes->setModel("Mercedes");
// Get the car’s model echo 
echo $mercedes->getModel();
?>
</body>
</html> 