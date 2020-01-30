<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Uniforms Details </title>
<link href="dance2.css" rel="stylesheet" type="text/css" />
<style>
#nav{
display:none;
}
</style>
<script src="jquery-3.2.1.js" type="text/javascript"></script>

<script type="text/javascript">
	
</script>
</head>

<body>
<div id="top">
<a href="index.php"> <img src="images/logo.jpg" /></a> 
<h1 id='head'>DANCE ACADEMY</h1> <br/>

</div>

<header>
<nav>
	<ul>
	<li><a href="uniforms.php" >Add Uniforms</a> </li>
	<li><a href="uniformsdetails.php">Uniforms</a> </li>		
<li><a href="membersdetails.php"> Members </a> </li>
<li><a href="addstaffs.php"> Add Teachers </a> </li>
<li><a href="staffs.php">Teachers</a> </li>
<li><a href="bookingtable.php">Booking Data</a> </li>
<li><a href="forum.php"> Forum </a> </li>
	<li><a href="logout.php"> Log Out </a> </li>
	</ul>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a> Follow us at:</a>	
 <a href="https://www.facebook.com/ElectricCarsReport/" target="blank"> <img src="images/facebook.png" width="30" height="30" /> </a>
 <a href="https://www.instagram.com/lucypet" target="blank"> <img src="images/instagram.jpg" width="30" height="30" /> </a>
 
</nav>
 <!--<a href="#head" class="take-top"><img src="images/up-arrow.png" alt="box"></a> -->
</header>
<?php
include 'connect.php';

$header='<html>
        <body>
		<table id="loginform"border="1" width="98%" align="center">
        <tr>
            <th >Id</th>
            <th >Image</th>
            <th >Uniforms Name</th>
            <th >Dance Type</th>
			<th >Gender</th>
            <th >Price</th>
			<th>Delete</th>
        </tr>';

  $footer='</table>
            </body>
            </html>';
			
			$insertqry = 'SELECT * FROM uniforms';
			$result = mysqli_query($conn, $insertqry);
			if (mysqli_num_rows($result) > 0) {
		
				echo $header;
				while($row = mysqli_fetch_assoc($result)){
					echo  "<tr>
					 <td>".$row["id"]."</td>
					 <td>".generateImage($row["image"])."</td>';
					 <td>".$row["name"]."</td>
					 <td>".$row["dance_type"]."</td>  
					 <td>".$row["gender"]."</td>
					 <td>".$row["price"]."</td>
				   <td><a href='delete.php?id=$row[id]'>Delete</a></td>				   
					</tr>";
				}
				
            echo $footer;
			}
			else{
            echo "0 results";
         }
         mysqli_close($conn);
		 
		 function generateImage($image)
         {
             return '<img src="'.$image.'" alt="Image" height="130" width="200">';
         }
?>
  <br/><br/>

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