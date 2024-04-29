
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><form action="" method="POST">


    name: <input type="text" name= "name"/>
    code: <input type="text" name= "code"/>
    img: <input type="file" name= "upload[]" multiple/></br></br>

    <button type="submit" name="submit">submit</button>
</form>
</body>
</html>
<?php
 $con = new mysqli("localhost", "root", "", "task") or die("error");

 $sql1 = "SELECT * FROM product_item";

 $result = $con->query($sql1);

 if($result->num_rows>0)
 {
     while($row = $result->fetch_assoc())
     {

     }
 } 

 if(isset($_POST['submit']))
{
$con = new mysqli("localhost", "root", "", "task") or die("error");

  $one = $_POST['name'];
  $code = $_POST['code'];
  $file =  $_FILES["upload"]['name'];
  $temp =$_FILES["upload"]['tmp_name'];
 
    $folder = "image\ " . $files;


    $sql = "INSERT INTO product_item(name, code, image) VALUES ('$one', '$code', '$file')";

    $con->query($sql) or die("connection2");
  
    
}   
    
  ?>