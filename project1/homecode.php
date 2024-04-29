<?php
session_start();
     
      $con = new mysqli("localhost","root","","project1") or die("error");
      if(isset($_POST['register']))
      {
       
       $name = $_POST['username'];
       $email = $_POST['email'];
       $num = $_POST['number'];
       $pass = $_POST['password'];
       $confirm = $_POST['confirm'];

       if($pass == $confirm)
       {
     
     $sql= "INSERT INTO password(username, email, number, pass, confirm)VALUES('$name', '$email', '$num', '$pass', '$confirm')";
     
     $con->query($sql) or die("error connection");
     
     $e = $con->insert_id;
     
     
      $_SESSION['user'] = $email;
      $_SESSION['id']  = $e;
      header("location: home.php");  
    
      }
    } 
   else
         {
          if(isset($_POST['submit']))
          {
          $name=$_POST['email'];
          $pass=$_POST['password'];
     
          $sql = "SELECT * FROM password WHERE email ='$name' AND pass = '$pass'";
    
            $result = $con->query($sql) or die("connectionn");
    
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                 if($name == $row["email"] && $pass == $row["pass"] )
                  {  
                     $_SESSION['user'] = $name;
                     $_SESSION['id']  = $row['id'];
                     header("location: home.php");  
                  } 
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