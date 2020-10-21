<?php 
	include_once 'config.php';

?>
<html>
<head>
	<link rel="stylesheet" href="css/styles.css">

</head>
<body>
	<div class = "header">
		<img src = "img/logo.png" width = "120" height="100" style="float:left">
		<a  href="contactus.php" class="contactus">Contact us</a><br></br>
		<div class="navigationbar">
			<a href="home.html">Home</a>
			<a href="aboutus.html">About us</a>
			<a href="member.html">Members</a>
			<a href="news.html">News</a>
			<a href="awards.html">Awards</a>
			
				<input type="text" class="searchbar" placeholder="Search.." name="search">
			
				<button type="submit" class="icon">search</button>
				
		</div>

		
		
	</div>

			
		<div class="column">
		<ul>
			<li><a href="register.html">Guest Registration</a></li>
			<li><a href="guestlogin.html">Guest Log in</a></li>
			<li><a href="memberlogin.html">Members Log in</a></li>
			<li><a href="Nominations.html">Nominations</a></li>
			<li><a href="#about">Event Gossip</a></li>
			<li><a href="rulesandfacts.html">Rules and Facts</a></li>
		</ul>
		</div>

		<div class="column1">
		<h2 style="color: white"><center>Leave a Comment</center></h2>
		<div class="container1">
			
		<form class="border" method="post" action="comment.php" ><center>
			<label for="fname">First name:</label><br><br>
			<input type="text" id="fname" name="finame" ><br><br>
			<label for="lname">Last name:</label><br><br>
			<input type="text" id="lname" name="laname" ><br><br>
			<label for="message">Message:</label><br><br>
			<textarea name="message" rows="10" cols="30"></textarea><br><br>
			<input type="submit" class="button1">
		</center>
		</form>	
		</div>
		</div>

	
		<div class="container1" style="margin-top:40%">
		<div class="border">
		<h2>Comments</h2>
		<?php 
	$sql = "select *from commenttable";
	$result = $conn->query($sql);
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			
			echo "<h3>".$row["Comment_ID"]."  ".$row["First_Name"]." ".$row["Last_Name"]."</h3></br><p>".$row["Comment"]."</p><hr>";
		}
	}
	else{
		echo "0 results";
	}

$conn->close();
?>
		
		<h3>Ask for help</h3>
					<label for="fname"> name:</label><br><br>
			<input type="text" id="fname" name="fname" ><br><br>
			<label for="lname">Email:</label><br><br>
			<input type="email" id="lname" name="lname" ><br><br>
			<label for="message">Message:</label><br><br>
			<textarea name="message" rows="10" cols="30">Describe your needs</textarea><br><br>
			<button class="button1" >Submit</button>
		
		</div>
		</div>
		
		



	
	<div id="footer1"  >
	<br></br>
	<div class="footer">
<div class="email">Email : Gacd@gmail.com</div>



</div>
	</div>
</body>
</html>