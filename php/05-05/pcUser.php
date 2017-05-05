<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User i tal</title>
</head>

<body>

<?php 
/**
* Class User
*/
abstract class User
{
	protected $username;
	
	public abstract function stateYourRole();
	public function setUsername($username)
	{
		$this->username = $username;
	}
	public function getUsername()
	{
		return $this->username;
	}
}
/**/

class Admin extends User
{
	
	/*function __construct($username)
	{
		$this->username = $username;
	} */

	public function stateYourRole()
	{
		return " Admin";
	}

	public function sayHello()
	{
		return "Hello, admin ".$this->getUsername();
	}
	
}
/**/
class Viewer extends User
{
	/*function __construct($username)
	{
		$this->username = $username;
	}*/

	public function stateYourRole()
	{
		return " Viewer";
	}
	
}

$admin1 = new Admin();
$admin1->setUsername("Balthazar");
echo $admin1->getUsername();
echo $admin1->stateYourRole();
echo "<br>";
$viewer1 = new Viewer();
$viewer1->setUsername("Jelly");
echo $viewer1->getUsername();
echo $viewer1->stateYourRole();
echo "<br>";

 ?>
	
</body>
</html>