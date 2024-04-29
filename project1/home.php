<?php include "homecode.php";  ?>
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
        body
        {
            width:1000px;
        }
        a{
            color:white;
        }
        #btn2{
            color:white;
        }
        #btn1{
            color:white;
        }
        #a{
            width:300px;
            height:300px;
            padding:10px;
            margin:10px;
        }
        button
        {
            float:right;
        }
        
    </style>
    
</head>
<body>
    
<form action="homecode.php" method="POST">    
<div id = "main">
    <div class ="btn-group-sm" id="one1">
       <?php if(!empty($_SESSION['user']))
       {?>  
            <button type="submit" name="log" id="log" class="btn btn-primary">logout</button>  
         <?php echo "<button type='submit' name='btn' id='btn' class='btn btn-primary'><a href='insert.php?an=$_SESSION[id]'>item</button></a>";?> 
            <button type="submit" name="btn1" id="btn btn-primary"><a href="#">profile</button></a>
            <button type="submit" name="btn2" id="btn btn-primary"><?php echo $_SESSION['user']; ?></button>
      <?php }else{ ?>
        <button type="submit" name="btn" class="btn btn-primary"><a href="login.php">login</button></a>
        <button type="submit" name="btn" class="btn btn-primary"><a href="register.php">register</button></a>
        <?php } ?>
    </div>
    <div id="logo">
        <h1>MYCART</h1>
    </div>
    </div>

    <div class="container mt-3">
 
  <div class="d-flex p-3 bg-secondary text-white" id="img"> 
 
   <div class="p-2 bg-info" >
 
   <?php  foreach($datas as $key=>$val)
   {  ?>
       <img src= "<?php echo $datas['item_id'] . '\ ' .$datas['image']; ?>" alt="image" id="a">
      <?php }?></div><div>
   </div>
  
   

    <div class ="btn-group-sm" id="one1">
    <h1 class="btn btn-primary">&#60;&#60;</h1>
        <h1 class="btn btn-primary">1</h1>
        <h1 class="btn btn-primary">2</h1>
        <h1 class="btn btn-primary">3</h1>
        <h1 class="btn btn-primary">4</h1>
        <h1 class="btn btn-primary">&#62;&#62;</h1>
    </div>
    </form>
</body>

</html>

           
          
   