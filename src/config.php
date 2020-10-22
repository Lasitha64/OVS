<?php 
$servername="localhost";
$username="root";
$password="";
$db = "commentdb";
$db1 = "awards";


$conn = new mysqli($servername, $username, $password, $db);

if($conn -> connect_error){
	die("Connection Failed :".$conn->connect_error);
}
else{
	echo "Connected Succefully";
}

$conn1 = new mysqli($servername, $username, $password, $db1);

if($conn1 -> connect_error){
	die("Connection Failed :".$conn1->connect_error);
}
else{
	echo "Connected Succefully";
}






?>