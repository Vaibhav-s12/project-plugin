<?php
session_start();
     if(isset($_POST['submit']))
     {
     $con = new mysqli("localhost","root","","project1") or die("error");
      $name=$_POST['email'];
      $pass=$_POST['password'];
     
      $sql = "SELECT * FROM password WHERE email ='$name' AND pass = '$pass'";

        $result = $con->query($sql) or die("connectionn");

        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
             if($name == $row['email'] && $pass == $row['pass'] )
              {  
                 $_SESSION['user'] = $name;
                 $_SESSION['id']  = $row['id'];
                 header("location: home.php");  
              } 
             }
         } 
     } 
    
 
?>
<?php
    
    if(isset($_POST['log']))
    {
        unset($_SESSION['user']);
        unset($_SESSION['id']);    
        header("location: login.php");         
            
    } 
?>
<?php
$con = new mysqli("localhost","root","","project1") or die("error");

$sql = "SELECT * FROM item";

  $result = $con->query($sql) or die("connectionn");
 
  if($result->num_rows > 0)
  {
      while($row = $result->fetch_assoc())
      {
          $data =$row;
      }
    }
 ?>   
  <?php
$con = new mysqli("localhost","root","","project1") or die("error");

$sql = "SELECT * FROM item_image";

  $result = $con->query($sql) or die("connectionn");
 
  if($result->num_rows > 0)
  {
      while($row = $result->fetch_assoc())
      {
         $datas=$row;
      } 
    }
        ?> 