<?php 
$servername="localhost";
$username="root";
$password="";

$db1 = "awards";



$conn1 = new mysqli($servername, $username, $password, $db1);

if($conn1 -> connect_error){
	die("Connection Failed :".$conn1->connect_error);
}
else{
	echo "Connected Succefully";
}