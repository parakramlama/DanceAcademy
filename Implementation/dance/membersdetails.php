<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> Members Details</title>
		<link href="dance2.css" rel="stylesheet" type="text/css" />
		<script src="jquery-3.2.1.js" type="text/javascript"></script>
		<script type="text/javascript"> </script>
	</head>

	<body>
		<div id="top">
			<a href="index.php"> <img src="images/logo.jpg" /></a> 
			<h1 id='head'>HAPPY DANCE ACADEMY</h1> <br/>
		</div>

		<header>
			<nav>
				<ul>
					<li><a href="uniforms.php" id="head">Add Uniforms</a> </li>
					<li><a href="uniformsdetails.php">Uniforms</a> </li>		
					<li><a href="membersdetails.php"> Members </a> </li>
					<li><a href="addstaffs.php"> Add Teachers </a> </li>
					<li><a href="staffs.php">Teachers</a> </li>
					<li><a href="bookingtable.php">Booking Data</a> </li>
					<!--<li><a href="forum.php"> Forum </a> </li>-->
					<li><a href="logout.php"> Log Out </a> </li>
				</ul>
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<a> Follow us at:</a>	
				<a href="https://www.facebook.com/ElectricCarsReport/" target="blank"> 
				<img src="images/facebook.png" width="40" height="40" /> </a>
				<a href="https://www.instagram.com/lucypet" target="blank"> 
				<img src="images/instagram.jpg" width="40" height="40" /> </a>
				<a href="https://www.gmail.com" target="blank"> 
				<img src="images/gmail.png" width="40" height="40" /> </a>
			 
			</nav>
			 <!--<a href="#head" class="take-top"><img src="images/up-arrow.png" alt="box"></a> -->
		</header>

		 <?php
		include 'connect.php';

		$qry_sel = "SELECT *, YEAR(Current_Date)-YEAR(dob) as age FROM users";
		$result = $conn->query($qry_sel);
		if($result->num_rows > 0)
		{
		echo "<table border='1'  id='registration' width='100%'>

		<h1 > Members Details </h1>
		      <tr>
			  <th>Id</th>
			  <th>Name</th>
			  <th>Gender</th>
			  <th>Email</th>
			  <th>Phone</th>
			  <th>DOB</th>
			  <th>Age</th>
			  <th>Username</th>
			   <th>Password</th>
			   <th>Re-Password</th>
			  
			  <th>Delete</th>
			  </tr>";

		while($data = $result->fetch_assoc())
		{
		echo "<tr>
		       <td>".$data['id'].
		     "</td><td>".$data['full_name'].
			 "</td><td>".$data['Gender'].
			 "</td><td>".$data['email'].
			 "</td><td>".$data['phone'].
			 "</td><td>".$data['dob'].
			 "</td><td>".$data['age'].
		     "</td><td>".$data['username'].
		     "</td><td>".$data['password'].
		     "</td><td>".$data['re-password'].
		     "</td>
			 
			 <td><a href='userdelete.php?id=$data[id]'>Delete</a></td>
			 </tr>";  
		}

		echo "</table>";
		}
		else
		{
			echo "No data";
		}
		?>


		<footer>
			<div class="main-footer">
				<div class="firstdivision">
		        	<div class="foot-topic">Contact Us</div>
		        <br> Dilli Bazar, Kathmandu
		        <br>phn no:+4456789 <br>email:dance@gmail.com</div>
		        
		        <div class="clear">
				
		        </div>  
		  	</div>
		 	<div class="secondfooter">
		    	Copyright &copy; 2020 HAPPY DANCE ACADEMY. All Rights Reserved.
		    </div>
		</footer>
	</body>
</html>