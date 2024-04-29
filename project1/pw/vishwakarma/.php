<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$numb = $_POST['num'];

$sql = "INSERT INTO table (name, email,num) values ('$name','$mail',$nubm)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>