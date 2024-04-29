
<?php
// update query
include ("index1.php");

$con = new mysqli ("localhost","root","","project1");

if($con->connect_error)
{
    die ("error" . $con->connect_error);
}

$id = $_GET['rn'];
$sql = "DELETE FROM item WHERE id = '$id' ";

if($con->query($sql)=== TRUE)
{
    echo "delete";
}
else{
    echo "error" . $con->error;
}
header("location: exa.php")
?>

<a href="index.php">Exit</a>


<!-- <html>
<head>
<style>
table{
    border:2px solid black;
    width:60%;
}
th{
    background-color:grey;
}
td{
    background-color:blue;
}
</style>
</head>
<body>
<form method = "POST" action = "#">
id :
<input type = "text" name = "id"></input>
<input type = "submit" value = "submit"></input></form>
</body>
</html>





 -->
