<?php
     include_once 'config.php';




?>
<html>
<head>
	<link rel="stylesheet" href="css/styles3.css">
	

</head>
<body>



<script  src="js/script.js" type="text/javascript">
</script>

<script type="text/javascript">
newd()
</script>
<span id="demo"></span>


	<div class = "header">
		<img src = "img/logo.png" width = "120" height="100" style="float:left">
		<a href="contactus.php" class="contactus">Contact us</a><br></br>
		<div class="navigationbar">
			<a  href="home.html">Home</a>
			<a href="aboutus.html">About us</a>
			<a href="member.html">Members</a>
			<a href="news.html">News</a>
			<a class = "active" href="awards.php">Awards</a>
	
			
				<input type="text" class="searchbar" placeholder="Search.." name="search">
			
				<button type="submit" class="icon">search</button>
				
				
		</div>
		</div>
                                         <div class= "column">
                           <ul>
                                                     <li><a href="register.html">Guest Registration</a></li>
			<li><a href="guestlogin.html">Guest Log in</a></li>
			<li><a href="memberlogin.html">Members Log in</a></li>
			<li><a  href="Nominations.html">Nominations</a></li>
			<li><a href="#about">Event Gossip</a></li>
			<li><a  href="rulesandfacts.html">Rules and Facts</a></li>
                           </ul>
                           
                           </div>
    

	<div class= "column1">	
		<p class="topic"> AWARDS </p>
		<br></br>
		<table class = "coloumn4">
		
		<tr>
		<th>AwardID</th>
		<th>Judge Name</th>
		<th>Award category</th>
		<th>Award name</th>
		<tr>
		
<?php 
	$sql = "select *from awardtable";
	$result = $conn1->query($sql);
	
	if($result->num_rows>0){
		
		while($row = $result->fetch_assoc()){
			
			echo "<tr><td>".$row["Award_ID"]."</td><td>".$row["Judge_Name"]."</td><td> ".$row["Award_category"]."</td><td>".$row["Award_name"]."</td></tr>";
		}
		echo "</table>";
	}
	else{
		echo "0 results";
	}

$conn1->close();
?>		

<br></br><br></br>
<button class= "button 3"> <a href= "Add Award.html"> Add Award</a> </button>
<br></br>
	
	</div>
	
	<div id="footer1" >
	<br></br>
	<div class="footer">
<div class="email">Email : Gacd@gmail.com</div>



</div>
	</div>
</body>
</html>