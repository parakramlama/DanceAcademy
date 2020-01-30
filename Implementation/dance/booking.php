<?php
include 'connect.php';
if(isset($_POST['post'])){


    $Name = $_POST['yname'];
    $Location = $_POST['clocation'];
    $Date= $_POST['bdate'];
    $Size= $_POST['groupsize'];
    

        $insert="INSERT INTO booking VALUES ('$Name','$Location','$Date','$Size')";
        $result=mysqli_query($conn,$insert) or die(mysqli_error($conn));
        if($result){
        echo "<script> alert ('Contents Added Successfully.');</script>";
        }
         else
            echo "<script type='text/javascript'>alert('Failed to add Contents.');</script>";
    }
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Classes </title>
<link href="dance2.css" rel="stylesheet" type="text/css" />
<script src="jquery-3.2.1.js"></script>
<script>
</script>
</head>
<body>
<div id="top">
<a href="index.php"> <img src="images/logo.jpg" /></a> 
<h1 id="head">DANCE ACADEMY </h1> <br/>
</div>

<header>

<nav>
	<ul>
	
<li><a href="memuniforms.php">Uniforms</a> </li>	
	
<li><a href="teachers.php"> Teachers </a> </li>
<li><a href="classes.php" > Classes </a> </li>
<li><a href="booking.php" > Booking </a> </li>
<li><a href="logout.php"> Log Out </a> </li>
	</ul>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a> Follow us at:</a>	
 <a href="https://www.facebook.com/" target="blank"> <img src="images/facebook.png" width="30" height="30" /> </a>
 <a href="https://www.instagram.com/" target="blank"> <img src="images/instagram.jpg" width="30" height="30" /> </a>
 <a href="https://www.gmail.com" target="blank"> <img src="images/gmail.png" width="30" height="30" /> </a>
</nav>
 <!--<a href="#head" class="take-top"><img src="images/up-arrow.png" alt="box"></a> -->
</header>

 <form method="post" enctype="multipart/form-data">

                <div class="container">
                 <h1> Book Now </h1>
                <div class="form-group">
                  <label for="name">Your Name:</label>
                  <input type="text" class="form-control" name="yname">
                </div><br/>
                <div class="form-group">
                  <label for="category">Choose Venue:</label>
                  <select class="form-control" name="clocation">
                    <option value="Kathmandu hall A">Kathmandu Hall'A'</option>
                    <option value="Bhaktapur hall">Bhaktapur Hall</option>
                    <option value="Pokhara hall">Pokhara Hall</option>
                    <option value="Lalitpur hall">Lalitpur Hall</option>
                    <option value="Kathmandu hall B">Kathmandu Hall'B'</option>
                    
                  </select>
                </div><br/>
                <div class="form-group">
                  <label for="file">Booking Date:</label>
                  <input type="date" class="form-control" name="bdate">
                  
                </div>
				<br/>
                <div class="form-group">
                  <label for="Size">Number of people:</label>
                  <input type="number" class="form-control" name="groupsize">
                </div>
                
                <button class="btn btn-primary" data-dismiss="modal" type="submit" name="post">Submit</button>
                
                </div>
                
            </div>
        </form>
    </br>  

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