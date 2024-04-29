<?php
   
   $Name = filter_input(INPUT_POST,'name');
   $last = filter_input(INPUT_POST,'email');
   $f_number = filter_input(INPUT_POST,'number');
   
   
  	
   $server = "Localhost";
   $username = "root";
   $password = "";
   $db = "test";
   
   $conn = new mysqli($server, $username, $password, $db);
	
   if($conn->connect_error){
	   die("connect failed: " . $conn->connect_error);
   }else{
   
   
   $sql = "INSERT INTO walk ('name', 'email') VALUES ($Name ,$last);"
   }
   
   if($conn->query($sql) === TRUE){
	  
	 echo "new record";  
   }else{
   echo "error: " . $sql . "<br>" . $conn->error; }
   
	
   $conn->close();
	
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="form" action="insert.php" method="GET" >
            <label id = "visit" >Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input  type="text" name = "name" placeholder="Enter your name" ></input> <br></br>
            <label id = "visit" >e-mail:</label>&nbsp;&nbsp;&nbsp;
            <input  type ="email" name = "email" placeholder="E-mail" ></input> <br><br>
            <label id = "visit">Number:</label>
            <input  type ="number" name = "number" placeholder="type your mobile for contact us" ></input>
            <pre>
                           <input id="button" type="submit"  ></input></pre>
        </form>
</body>
</html>