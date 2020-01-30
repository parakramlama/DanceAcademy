<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Add Teachers</title>
<link href="dance2.css" rel="stylesheet" type="text/css" />
<style>
#nav{
display:none;
}
</style>
<script src="jquery-3.2.1.js" type="text/javascript"></script>

<script type="text/javascript"></script>
<script>
	function validateForm(){	
        	var image = document.staff.image;
        	var name = document.staff.name;
        	var gender = document.staff.gender;
        	var email = document.staff.email;
			var phone = document.staff.phone;
            var dance_style = document.staff.dance_style;
        	var description_of_dance_style = document.staff.descriptio_of_dance_style;
			var time = document.staff.time;
			
			
           
           if(image.files.length===0)
            {
                alert("Please upload Staff Photo");
                return false;
            }
            else if(teachers_name.value =="")
            {
                alert("Please enter name.");
                return false;
            }
            else if(gender.value =="")
            {
                alert("Please enter gender.");
                return false;
            }
           else if(email.value =="")
            {
                alert("Please enter email.");
                return false;
            }
            else if(phone.value =="")
            {
                alert("Please enter product's phone.");
                return false;
            }
			 else if(dance_style.value =="")
            {
                alert("Please enter style.");
                return false;
            }
			 else if(description_of_dance_style.value =="")
            {
                alert("Please enter description.");
                return false;
            }
			 else if(time.value =="")
            {
                alert("Please enter time.");
                return false;
            }
			
			
           
}
			

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
if(isset($_POST['upload'])){
// image file directory
  	$target = "images/";
	
 // Get image name
  	$image = $_FILES['image']['name'].basename($target);
  	// Get text
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$dance_style= mysqli_real_escape_string($conn, $_POST['dance_style']);
	$description_of_dance_style = mysqli_real_escape_string($conn, $_POST['description_of_dance_style']);
	$time = mysqli_real_escape_string($conn, $_POST['time']);
	
	
	

  	$sql = "INSERT INTO staff (image,name,gender,email,phone,dance_style,description_of_dance_style,time) 
 	VALUES ('$image','$name','$gender','$email','$phone','$dance_style','$description_of_dance_style','$time')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
  		echo"Data uploaded successfully";
  	}
	else{
  		$msg = "Failed to upload Data";
  	}
  }
  $result = mysqli_query($conn, "SELECT * FROM staff");
?>

<form method="POST" id="registration" name="staffs" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" onsubmit="return validateForm.call(this);">
	<input type="hidden" name="size" value="1000000">
<h1> Upload Teachers details</h1>
	
  
	<label for="image">Image:</label>
  	  <input  class="form-control" type="file"  name="image" id="image"br /><br/><br/>
	 

	 <label for="name">Name:</label>
    <input type="text" name="name"  value="<?php if(isset($_GET['Id']))?>"><br /><br />
	
	<label for="gender">Gender:</label>
 <input type="text" name="gender"  value="<?php if(isset($_GET['Id']))?>" ></textarea> <br /><br />
 
 
      <label for="email">Email:</label>
    <input type="text" name="email" value="<?php if(isset($_GET['Id']))?>" ></textarea> <br /><br />
	
	
      <label for="phone">Phone:</label>
    <input type="text" name="phone" value="<?php if(isset($_GET['Id']))?>" ></textarea> <br /><br />
	
	
 <label for="dance_style">Dance Style:</label>
 <input type="text" name="dance_style"  value="<?php if(isset($_GET['Id']))?>" ></textarea> <br /><br />
 
 
      <label for="description_of_dance_style">Description:</label>
    <input type="text" name="description_of_dance_style" value="<?php if(isset($_GET['Id']))?>" ></textarea> <br /><br />
	
	 <label for="time">Time:</label>
    <input type="text" name="time" value="<?php if(isset($_GET['Id']))?>" ></textarea> <br /><br />

  <input type="submit" name="upload" value="Add Details">
		
 
  </form>
  
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