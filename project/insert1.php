<?php
include "homecode.php";
$con = new mysqli("localhost","root","","project1") or die("error");
 if(isset($_POST['submit']))
 {
  $name = $_POST['username'];
  $email = $_POST['email'];
  $num = $_POST['number'];
  $pass = $_POST['password'];
  $confirm = $_POST['confirm'];

$sql= "INSERT INTO password(username, email, number, pass, confirm)VALUES('$name', '$email', '$num', '$pass', '$confirm')";

$con->query($sql) or die("error connection");

$e = $con->insert_id;

 }
?>