<?php
     include_once 'config.php';




?>

<?php 
	$data1 = $_POST["fname"];
	$data2 = $_POST["lname"];
	$data3 = $_POST["gender"];
	$data4 = $_POST["phone"];
	$data5 = $_POST["email"];
	$data6 = $_POST["w3review"];
	$data7 = $_POST["birthday"];
	$data8 = $_POST["password"];
	$data9 = $_POST["psw"];

	$sql = "insert into new(ID,First_Name,Last_Name,Gender,Phone_Number,Email,Address,Birthday,Password,Retype_Password)values('','$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8','$data9')";
	
	if(mysqli_query($conn2, $sql)){
		echo "<script>alert ('Record Inserted Successfully')</script>";
		header("Location:home.html");
	}
	else{
		echo "<script>alert ('Error in inserting records')</script>";
	}
	
	mysqli_close($conn2);
	
?>