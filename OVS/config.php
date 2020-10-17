<?php 
$servername="localhost";
$username="username";
$password="password";

$conn= new mysqli($servername, $username, $password);

if($conn->connection_error){
	die("Connection Failed :".$conn->connection_error);
}

echo "Connected succefully";



?>