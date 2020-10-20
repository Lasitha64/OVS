<?php 
	include_once 'config.php';

?>


<?php 
	$fname = $_POST["finame"];
	$lname = $_POST["laname"];
	$comm = $_POST["message"];


	$sql = "insert into commenttable(Comment_ID,First_Name,Last_Name,Comment)values('','$fname','$lname','$comm')";
	
	if(mysqli_query($conn, $sql)){
		echo "<script>alert ('Record Inserted Succefully')</script>";
		header("Location:contactus.php");
	}
	else{
		echo "<script>alert ('Error in insertinh records')</script>";
	}
	
	mysqli_close($conn);
	
?>