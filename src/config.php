<?php 
$servername="localhost";
$username="root";
$password="";
$db = "commentdb";
$db1 = "award";
$db2 = "register";


$conn = new mysqli($servername, $username, $password, $db);

if($conn -> connect_error){
	die("Connection Failed :".$conn->connect_error);
}
else{
	echo "Connected Successfully";
}

$conn1 = new mysqli($servername, $username, $password, $db1);

if($conn1 -> connect_error){
	die("Connection Failed :".$conn1->connect_error);
}
else{
	echo "Connected Successfully";
}

$conn2 = new mysqli($servername, $username, $password, $db2);

if($conn2 -> connect_error){
	die("Connection Failed :".$conn2->connect_error);
}
else{
	echo "Connected Successfully";
}





?>