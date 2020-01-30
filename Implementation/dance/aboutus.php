<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> About Us </title>
<link href="dance2.css" rel="stylesheet" type="text/css" />
<script src="jquery-3.2.1.js"></script>
<script>

$(document).ready(function(){

	$("#p1").hide();
	$("#p2").hide();
	$("#p3").hide();
	$("#p4").hide();
	
	$("#a1").click (function(event){
	$("#p1").slideToggle("fast");
	});
	
	$("#a2").click (function(event){
	$("#p2").slideToggle("fast");
	});
	
	$("#a3").click (function(event){
	$("#p3").slideToggle("fast");
	});
	
	$("#a4").click (function(event){
	$("#p4").slideToggle("fast");
	});
	});


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
	<li><a href="Index.php" >Home</a> </li>
	<li><a href="aboutus.php">About us</a> </li>		
	
	<li><a href="login.php"> Login </a> </li>
	<li><a href="register.php"> Register </a> </li>
	</ul>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a> Follow us at:</a>	
 <a href="https://www.facebook.com/ElectricCarsReport/" target="blank"> <img src="images/facebook.png" width="50" height="50" /> </a>
 <a href="https://www.instagram.com/lucypet" target="blank"> <img src="images/instagram.jpg" width="50" height="50" /> </a>
 <a href="https://www.gmail.com" target="blank"> <img src="images/gmail.png" width="50" height="50" /> </a>

 
</nav>
   <!--<a href="#head" class="take-top"><img src="images/up-arrow.png" alt="box"></a> -->  
</header>

<div class="about"  id="head">
<h1> About Academy </h1>
<button class="accordion" id="a1"> About Us </button>
<div class="panel">
  <p id="p1">Happy Dance Academy, the institute that exposes the grooving talent hidden inside you. All we do is transform all your moves into dance steps.
  Express through your body what your words cannot. Whether it’s Kathak or Ballet, Bharat Natyam or Contemporary, Classical or Modern or any other forms, just roll in and live your desire.
  Come be a part of KDA and explore yourself and your abilities to move your body to the beats of music. We believe Dance is the hidden language of the soul and is the visible form of Music.
  So enroll to communicate in this divine language.</p>
</div>

<button class="accordion" id="a2"> Location </button>
<div class="panel">
  <p id="p2"> Happy Dance academy <br/>
Dilli Bazar,kathmandu<br/>
(01)4312748  </p>
</div>

<button class="accordion" id="a3"> Contact Details </button>
<div class="panel">
  <p id="p3"> For further information about Dance academy as well as classes of the company, you can contact us via facebook, gmail, instagram as well as direct phone call.
The contact details for social medias are:<br/>
<a href="https://www.facebook.com/" target="blank"> Facebook </a><br/>
<a href="https://www.instagram.com/" target="blank"> Instagram </a><br/>
<a href="https://www.gmail.com" target="blank"> Gmail </a> <br/>
Contact number:<br/>
9876543212<br/>
+44 45678876
</div>

<button class="accordion" id="a4"> Help </button>
<div class="panel">
  <p id="p4"> To view the information of academy details, you must <a href="register.php" tagret="blank"> Register </a> to the company's website.<br/>
If you are already registered then <a href="login.php" target=""blank> Login </a> to the academy's website.<br/>
The registered members can view the details through <a href="product.php" target="blank"> Products page </a> and book the best car available.<br/>
If any problems and issues are found in the process, please feel free to provide feedback to us.<br/>
You can also email us their problems through the social medias provided in contact Details. </p>
</div>

</div>


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