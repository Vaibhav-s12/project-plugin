<?php
 include "test.php";

if(isset($_POST['submit']))
{



 $me = "INSERT INTO table (username, usermail,number) VALUES('vaibhav','vaibha@gmail.com',9828332220)";
 
}
if(mysqli_query($conn, $me))
{
  echo "database";
}else{
  echo "ERROR: " . $me . " <br>
  " . mysqli_error($conn);
}


mysqli_close($conn);
?>