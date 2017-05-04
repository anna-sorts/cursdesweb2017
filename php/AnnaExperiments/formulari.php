<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// defineix variables i deixa-les buides
$nomErr = $pCogErr = $sCogErr = $dniErr = $edatErr = $genereErr = $eCivilErr $eLaboErr = "";
$nom = $pCognom = $sCognom = $dni = $edat = $genere = $estatCivil = $estatLaboral = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nom"])) {
    $nomErr = "El camp Nom és obligatori";
  } else {
    $nom = test_input($_POST["nom"]);
    // check if nom only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nom)) { // lo de dins del match és una expressió regular
      $nomErr = "El camp sols admet lletres i espais en blanc"; 
    }
  }

  if (empty($_POST["pCognom"])) {
    $pCogErr = "El camp Primer Cognom és obligatori";
  } else {
    $pCognom = test_input($_POST["pCognom"]);
    // check if nom only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$pCognom)) { // lo de dins del match és una expressió regular
      $pCogErr = "El camp sols admet lletres i espais en blanc"; 
    }
  }

  if (empty($_POST["sCognom"])) {
    $sCogErr = "El camp Segon Cognom és obligatori";
  } else {
    $sCognom = test_input($_POST["sCognom"]);
    // check if nom only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$sCognom)) { // lo de dins del match és una expressió regular
      $sCogErr = "El camp sols admet lletres i espais en blanc"; 
    }
  }

  if (empty($_POST["edat"])) {
    $edatErr = "L'edat es obligatoria";
  } else {
    $edat = test_input($_POST["edat"]);
    // check if the client/user is minor
    if ($edat < 18) { 
      $edatErr = "Has de ser major d'edat per poder participar"; 
    }
  }
  
  // if (empty($_POST["email"])) {
  //   $emailErr = "Email is required";
  // } else {
  //   $email = test_input($_POST["email"]);
  //   // check if e-mail address is well-formed
  //   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //     $emailErr = "Invalid email format";
  //   }
  // }
    



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="nom">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Age: <input type="number" name="age">
  <span class="error">* <?php echo $ageErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
  <input type="reset" name="reset" value="Reset">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $nom;
echo "<br>";
echo $age;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
[[[1, 2], [3, 5]], [[4, 4], [1, 8]], [[8, 3], [5, 5]]]