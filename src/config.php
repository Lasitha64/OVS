<?php 
$servername="localhost";
$username="root";
$password="";
$db = "commentdb";


$conn = new mysqli($servername, $username, $password, $db);

if($conn -> connect_error){
	die("Connection Failed :".$conn->connect_error);
}
else{
	echo "Connected Succefully";
}










?>