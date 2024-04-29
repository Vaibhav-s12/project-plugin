<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
<body>
<div class="container">
  <h2>VARIENT ROW</h2>
<table class="table table-striped">
 
    <thead>
      <tr>
        <th>NAME</th>
        <th>PRICE</th> 
        <th>SALE</th>    
      </tr>
    </thead>
    <tbody>
      
      <?php  $con = new mysqli("localhost","root","","project1") or die("error");

            $id = $_GET['rn'];

            $sql = "SELECT * FROM varient WHERE item_id = $id ";
            $result = $con->query($sql) or die("connectionn");
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                { ?>
      <tr>
        <td><?php echo $row['name'];?></td>
        <td> <?php echo $row['price'];?></td>
        <td> <?php echo $row['sale'];?></td>
        
      </tr>
      <?php
      }
}
        ?>
    <tbody>
</table>
</body>
</html>
