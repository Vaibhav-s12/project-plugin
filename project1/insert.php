<?php $i = $_GET['an']; ?>
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
  <style>
      #create{
      float:right;
    }
  </style>
</head>
<body>
 
<div class="container">
<?php echo "<a href='index.copy.php?n=$i'><button type='button' id='create'>CREATE TABLE</a></button>"; ?>
  <h2>Index row</h2>            
  <table class="table table-striped">
 
    <thead>
      <tr>
        <th>Name</th>
        <th>Code</th>
        <th>option</th>
      </tr>
    </thead>
    <tbody>

      
      <?php
    
        $con = new mysqli("localhost","root","","project1") or die("error"); 
     
$sql = "SELECT * FROM item WHERE user_id = '$i'";
$result = $con->query($sql) or die("connectionn");
if($result->num_rows > 0)
  {
      while($row = $result->fetch_assoc())
      { ?>
      <tr>
        <td><?php echo $row['name1'];?></td>
        <td><?php echo $row['code'];?></td>
        <?php echo "<td><button alt='delete'><a href= 'delete.php?rn=$row[id]' alt='delete'><span class='glyphicon glyphicon-trash' alt='delete'></a></span></button>
          <button alt='update'><a href='update.php?en=$row[id]'><span class='glyphicon glyphicon-edit'></a></span></button>
          <button alt='view'><a href='view.php?rn=$row[id]'><span class='glyphicon glyphicon-th-list'></a></button></span></td>";?>
          </tr>
           <?php
      }
    } 
?>
     
     
    </tbody>
   
  </table>
</div>
 
</body>
</html>

</body>
</html>

    

