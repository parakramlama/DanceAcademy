<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Add Unifroms</title>
  <link href="dance2.css" rel="stylesheet" type="text/css" />
  <style>
    #nav{
      display:none;
    }
  </style>
  <script src="jquery-3.2.1.js" type="text/javascript"></script>
  <script type="text/javascript"> </script>
  <script>
  	function validateForm(){	
          	var image = document.uniforms.image;
          	var name = document.uniforms.name;
          	var dance_type = document.uniforms.dance_type;
          	var price = document.uniforms.price;
          	
             if(image.files.length===0)
              {
                  alert("Please upload product image");
                  return false;
              }
              else if(name.value =="")
              {
                  alert("Please enter product name.");
                  return false;
              }
              else if(dance_type.value =="")
              {
                  alert("Please enter dance type.");
                  return false;
              }
             else if(gender.value =="")
              {
                  alert("Please enter product's gender.");
                  return false;
              }
              else if(price.value =="")
              {
                  alert("Please enter product's price.");
                  return false;
              }
          }

  </script>
</head>

<body>
  <div id="top">
  <a href="index.php"> <img src="images/logo.jpg" /></a> 
  <h1 id='head'>HAPPY DANCE ACADEMY</h1> <br/>

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
        <!--<li><a href="forum.php"> Forum </a> </li>-->
      	<li><a href="logout.php"> Log Out </a> </li>
    	</ul>
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
  if(isset($_POST['upload'])){
  // image file directory
    	$target = "images/";
  	
   // Get image name
    $image = $_FILES['image']['name'].basename($target);
    	// Get text
  	$name = mysqli_real_escape_string($conn, $_POST['name']);
  	$dance_type = mysqli_real_escape_string($conn, $_POST['dance_type']);
  	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
  	$price = mysqli_real_escape_string($conn, $_POST['price']);
  	
    $sql = "INSERT INTO uniforms (image,name,dance_type,gender,price)
   	VALUES ('$image','$name','$dance_type','$gender','$price')";
    	// execute query
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
    		echo"Data uploaded successfully";
    }
  	else{
    		$msg = "Failed to upload Data";
  	}
    }
    $result = mysqli_query($conn, "SELECT * FROM uniforms");
  ?>

  <form method="POST" id="adduniforms" name="uniforms" action="<?php echo $_SERVER['PHP_SELF']; ?>" 
    enctype="multipart/form-data" onsubmit="return validateForm.call(this);">

  	<input type="hidden" name="size" value="1000000">
    <h1> Upload Uniforms details</h1>
  	  
    <label for="image">Image:</label>
    <input  class="form-control"type="file" name="image" id="image"br /><br/><br/>
    	 
    <label for="name">Name:</label>
    <input  class="form-control" type="text"name="name" value="<?php if(isset($_GET['Id']))?>"><br /><br />
    	
    <label for="dance_type">Dance Type:</label>
    <input type="text" name="dance_type"  value="<?php if(isset($_GET['Id']))?>" ></textarea> <br /><br />
   
  	<label for="dance_type">Gender:</label>
    <input type="text" name="gender"  value="<?php if(isset($_GET['Id']))?>" ></textarea> <br /><br />
    	
    <label for="price">Price:</label>
    <input type="text"name="price" value="<?php if(isset($_GET['Id']))?>" ></textarea> <br /><br />
  	
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
</body>
</html>