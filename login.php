<?php

//database

$DB_NAME="blog";
$DB_HOST="localhost";
$DB_USERNAME="root";
$DB_PASSWORD="";


$username=$_GET['username'];
$password=$_GET['password'];


$conn = new mysqli($DB_HOST,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);

if ($conn->connect_error) {
  die("connetion failed".$conn->connect_error); //inbuilt func to display the message and exit from the php script.
}
  
$query = "SELECT username,password FROM registration_details";
$result = $conn->query($query);

while ($row=$result->fetch_assoc()) {
	# code...
if(($username==$row['username'])&&($password==$row['password'])){
	header("Location:../html/frontEnd.html");
}

else
echo "incorrect password";
}


?>