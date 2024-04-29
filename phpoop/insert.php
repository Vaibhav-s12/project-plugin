
<?php
class insert{
    public $name;
    public $last;

    function __construct($name, $last)
    {
       
        $this->name = $name;

        
      $this->last = $last;    
        $con = new mysqli("localhost","root","","test");    
        $sql = "INSERT INTO one(NAME, LAST)VALUES('$this->name','$this->last')"; 
        $con->query($sql); 
    }
    function show()
    {
        return $this->name;
        
    }
    function show1()
    {
        return $this->last; 
    }

}

$dummy  = new insert($_POST['name'],$_POST['last']);
echo $dummy->show();
echo $dummy->show1();
    
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
    <form action="" method = post>
    <input type="text" name="name">
    <input type="text" name="last">
    <input type="submit" name = button>
    </form>
</body>
</html>