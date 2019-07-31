<?php 
$dbname="blog";
//////////server connection
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
  die("connetion failed".$conn->connect_error); //inbuilt func to display the message and exit from the php script.
}

////////serverconnection
$email=$_GET['email'];
$username=$_GET['username'];    //variable for getting a name which is entered in the form.
$password=$_GET['password'];
$password2=$_GET['password2'];
    // display the name which is entered in the form.
/* echo "Email : ".$email."<br>";
echo "Address : ".$address."<br>";
echo "Phone No :".$phone."<br>";
echo "Destination :".$desire."<br>"; */

if($password===$password2)
{
$quer=" INSERT INTO registration_details (email,username,password) VALUES('$email','$username','$password')"; //inserting the values into db.
if($conn->query($quer)===TRUE){
/*  echo " Thanks for registering. We will be looking forward to see you.<br>";
  echo "Username : ".$username."<br>";
  echo "Successfully Registered<br>"; */
  header('Location:../html/signupsuccess.html');
}
else
echo "<br>enter correct data  ".$quer ."<br>".$conn->error;
}
else
	echo "passwords do not match";

 ?>