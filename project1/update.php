<?php
// ITEM TABLE SELECT AND UPDATE QUERY
$con = new mysqli ("localhost","root","","project1") or  die ("error" . $con->connect_error);

$id = $_GET['en'];

$sql1 = "SELECT * FROM item WHERE id = '$id'";

$result = $con->query($sql1);
  if($result->num_rows>0)
  {
      while($row=$result->fetch_assoc())
      {
          $data = $row;
          
      }
  }

if(isset($_POST['submit']))
{
  
$name =$_POST['one'];
$price =$_POST['two'];


$sql ="UPDATE item SET name1='$name', code='$price' WHERE id='$id'";

$con->query($sql);
}
?>
<?php
// VARIENT TABLE SELECT AND UPDATE QUERY
          
      
  
if(isset($_POST['update']))
{
  $name =$_POST['name'];
  $price =$_POST['price'];
  $sale =$_POST['sale'];
     
$sql ="UPDATE item SET name = '$name', price = '$price', sale='$sale' WHERE item_id='$id'";

 $con->query($sql);
 
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <form action="" method="POST">
<div class="container">
  <h2>Index row</h2>            
  <table class="table table-striped">
 
    <thead>
      <tr>
        <th>NAME</th>
        <th>CODE</th>    
      </tr>
    </thead>
    <tbody>
   
      <tr>
          <td><input type="text" name="one" value="<?php echo $data['name1'];?>"></td>
          <td><input type="text" name="two" value="<?php echo $data['code'];?>"></td>
          <td><input type="submit" name="update" value="UPDATE"></td> 
      </tr>
     
</form>
     </tbody>
</table>
<div class="container">
  <h2>VARIENT ROW</h2>
<table class="table table-striped">
 
    <thead>
      <tr>
        <th>NAME</th>
        <th>CODE</th>    
      </tr>
    </thead>
    <tbody>
    <?php $sql1 = "SELECT * FROM varient WHERE item_id = '$id'";

$result = $con->query($sql1);
  if($result->num_rows>0)
  {
      while($row=$result->fetch_assoc())
      {?>
      <tr>
          <td><input type="text" name="name[]" value="<?php echo $row['name'];?>"></td>
          <td><input type="text" name="price[]" value="<?php echo $row['price'];?>"></td>
          <td><input type="text" name="sale[]" value="<?php echo $row['sale'];?>"></td>
          <td><input type="submit" name="submit" value="UPDATE"></td>   
      </tr>
      <?php } } ?>   
</form>
     </tbody>
</table>
</body>
</html>
