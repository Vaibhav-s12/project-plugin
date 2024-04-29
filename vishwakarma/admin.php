<?php
if(isset($_POST['btn']))
{
class admin
{
   function set($img)
   {
       

        $temp = $_FILES['img']['tmp_name'];

        $folder = "image\ " . $img;    
       $con = new mysqli("localhost", "root", "", "vishwa") or die("connection error");
       $sql = "INSERT INTO img(image)VALUES('$img')";
       $con->query($sql); 
       move_uploaded_file($temp, $folder) or die("upload error");  
   }
   
}
$dummy = new admin;


$dummy->set($_FILES['img']['name']);
unset($dummy);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><form action="" method = "post" enctype = multipart/form-data>
    <input type="file" name = "img">
    <button type = "submit" name = "btn">submit</button>
    </form>
</body>
</html>