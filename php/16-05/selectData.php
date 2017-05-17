<?php
//aquestes 4 línies les podriem tenir guardades en un altre fitxer, com "dadesconexio.php" i fer:
//require_once("dadesconexio.php");
$servername = "mysql-caront.alwaysdata.net";
$username = "caront";
$password = "944214";
$dbname = "caront_mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>