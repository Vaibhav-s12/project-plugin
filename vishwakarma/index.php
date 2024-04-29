<?php
class admin
{ public $data;
   function set()
   {   
          
       $con = new mysqli("localhost", "root", "", "vishwa") or die("connection error");
       $sql = "SELECT * FROM img";
      $result = $con->query($sql);
      if($result->num_rows<0)
      {
          while($row=$result->fetch_assoc())
          {
              $data[] = $row;
              
          }
      }return  $data; 
       
       
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href = "style.css" rel = "stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><div id = "head">
    <h1>VISHWAKARMA WORKS</h1>
    </div>
    <div id = "body">
        <h2>ADEVERTIESMENT WORK</h2>
    <div id = "me">
        <?php
        $dummy = new admin();
        $dummy->set();
        foreach($dummy as $val)
        {
        ?>
        <img src="<?php 'image/'.$val?>" alt="" >
        <?php } ?>
    </div></div>
    <div id = "body">
        <h2>EVENT WORKS</h2>
    </div>
    <div id = "me"></div>
    <div id = "body">
        <h2>CONTACT US</h2>
    
    <div id = "me">
<pre>    
        <label >Name:</label>
        <input type="text"></br></br></br>
        <label >Number:</label>
        <input type="text"></br></br></br>
        <label >Email:</label>
        <input type="text">
    
    </pre>
    </div></div>
    <div id = "body">
        <h2>ABOUT US</h2>
    </div>
    <div id = "me"></div>
</body>                
</html>                        