<?php
     include_once 'config.php';




?>

<?php 
	$jname = $_POST["juname"];
	$acategory = $_POST["awcategory"];
	$mname = $_POST["moname"];


	$sql = "insert into awardtable(Award_ID,Judge_Name,Award_category,Award_name)values('','$jname','$acategory','$mname')";
	
	if(mysqli_query($conn1, $sql)){
		echo "<script>alert ('Record Inserted Succefully')</script>";
		header("Location:awards.php");
	}
	else{
		echo "<script>alert ('Error in inserting records')</script>";
	}
	
	mysqli_close($conn1);
	
?>