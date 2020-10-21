<?php
     include_once 'config1.php';




?>

<?php 
	$jname = $_POST["juname"];
	$acategory = $_POST["awcategory"];
	$mname = $_POST["moname"];


	$sql1 = "insert into awards(Award ID,Judge Name,Award category,Award name)values('','$jname','$acategory','$mname')";
	
	if(mysqli_query($conn1, $sql1)){
		echo "<script>alert ('Record Inserted Succefully')</script>";
		header("Location:awards.php");
	}
	else{
		echo "<script>alert ('Error in insertinh records')</script>";
	}
	
	mysqli_close($conn1);
	
?>