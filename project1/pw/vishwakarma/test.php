 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_error());
}
else
{
echo "sucess";}

?>