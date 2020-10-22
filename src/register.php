<?php
include_once 'config2.php';
?>

<?php

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$male=$_POST["male"];
$female=$_POST["female"];
$other=$_POST["other"];
$pno=$_POST["phone"];
$email=$_POST["email"];
$address=$_POST["w3review"];
$birthday=$_POST["birthday"];
$password=$_POST["password"];

$sql1="insert into registration details(First name,Last name,Male,Female,Other,Phone Number,E-mail,Address,Birthday,Password)values('$fname','$lname','$male','$female','$other','$pno','$email','$address','$birthday','$password')";

if(mysqli_query($conn,$sql1)){
	header("Location:home.html");
}
else {
	echo "<script>alert('error')</script>" ;
	
	
}
mysqli_close
?>