<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Classes </title>
<link href="dance2.css" rel="stylesheet" type="text/css" />
<style>
#nav{
display:none;
}
</style>
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
	<li><a href="memuniforms.php">Uniforms</a> </li>	
	
<li><a href="teachers.php"> Teachers </a> </li>
<li><a href="classes.php"> Classes </a> </li>
<li><a href="booking.php" > Booking </a> </li>
<li><a href="forum.php"> Forum </a> </li>
	<li><a href="logout.php"> Log Out </a> </li>
	</ul>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a> Follow us at:</a>	
 <a href="https://www.facebook.com/ElectricCarsReport/" target="blank"> <img src="images/facebook.png" width="30" height="30" /> </a>
 <a href="https://www.instagram.com/lucypet" target="blank"> <img src="images/instagram.jpg" width="30" height="30" /> </a>
 <a href="https://www.gmail.com" target="blank"> <img src="images/gmail.png" width="30" height="30" /> </a>
</nav>
 <!--<a href="#head" class="take-top"><img src="images/up-arrow.png" alt="box"></a> -->
</header>

<div class="classes" id="heading">
 
    <div class="box">
    	        <div class="beginner">
            		<div class="line">
					<a href="beginner.php" id="head">Beginner</a> 
	                </div>                
						
            	    <div class="beginnerfield">	
                	</div>
	            </div>
				
                <div class="intermediate">
            		<div class="line">
            	    	<a href="inter.php" id="head">Intermediate</a>
	        		</div>
    
    	            <div class="intermediatefield">	
        	        </div>
	            </div>
          
    	        <div class="advanced">
			        <div class="line">
	        	    	<a href="adv.php" id="head">Advanced</a>
					</div> 
	
                    <div class="advancedfield">	
    	            </div>
        	    </div>
        
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