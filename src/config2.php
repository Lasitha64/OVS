<?php 
$servername="localhost";
$username="root";
$password="";

$db2="register";

$conn = new mysqli($servername, $username, $password,  $db2);

if($conn -> connect_error){
	die("Connection Failed :".$conn->connect_error);
}
else{
	echo "Connected Successfully";
}



?>