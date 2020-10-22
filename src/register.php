<?php
include_once 'config.php';
?>

<?php

$finame=$_POST["fname"];
$laname=$_POST["lname"];
$gend=$_POST["gender"];
$pno=$_POST["phone"];
$emails=$_POST["email"];
$address=$_POST["w3review"];
$birthday1=$_POST["birthday"];
$password1=$_POST["password"];

$sql="insert into registrationtable(Register_ID,First name,Last name,Gender,Phone Number,E-mail,Address,Birthday,Password)values('$finame','$laname','$gend','$pno','$emails','$address','$birthday1','$password1')";

if(mysqli_query($conn2,$sql)){
	echo "<script>alert ('Record Inserted Succefully')</script>";
	header("Location:home.html");
}
else {
	echo "<script>alert('error')</script>" ;
	
	
}
mysqli_close($conn2);
?>