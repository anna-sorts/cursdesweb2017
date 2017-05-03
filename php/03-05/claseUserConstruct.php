<html>
<head>
<title>Coches</title>
</head>
<body>
<?php
class User {

  // The private access modifier denies access to the 
  // method from outside the class’s scope 
  private $firstName;
  private $lastName;
  private $gender;
  
  public function __construct($firstName, $lastName, $gender) 
  { 
    $this->firstName = $firstName;
    $this->lastName = $lastName; 
    $this->gender = $gender; 
  } 
  

  public function getFullName() { 
    $gTitle = '';
    if ($this->gender == "M") {
      $gTitle = "Mr.";
    }
    else if ($this->gender == "F") {
      $gTitle = "Ms.";
    }
    else {
      $gTitle = "Mx.";
    }
    return  $gTitle .  " " . $this->firstName .  " " . $this->lastName . "<br>"; 
  }

}

$user1 = new User("John","Doe","M");
$user2 = new User("Marie Ann","Lyn","F");
$user3 = new User("Dr","Pepper","O");
echo $user3->getFullName();
echo $user1->getFullName();
echo $user2->getFullName();
?>
</body>
</html> 