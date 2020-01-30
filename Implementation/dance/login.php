<?php
if(isset($_POST['login']))
{
	include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_COOKIE[$username]))
{
if($_COOKIE[$username]>2)
{
die("You are blocked for 5 mins");
}
}
$qry = "SELECT * FROM users WHERE username='$username' and password='$password'";
$res = $conn->query($qry);
if($res->num_rows == 1)
{
session_start();
while($data = $res->fetch_assoc())
{
$_SESSION['username'] = $data['username'];
$_SESSION['password'] = $data['password'];
}
if($_SESSION['username'] == "admin")
{header('location:uniforms.php?login=success');
	exit();
	}
else{header('location:memuniforms.php?login=success');
	exit();
	}
}
{
echo "Invalid id or password";

setcookie($username,1);
if(isset($_COOKIE[$username]))
{
setcookie($username,$_COOKIE[$username]+1,time()+300);
echo $_COOKIE[$username];
}
}
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Login </title>
<link href="dance2.css" rel="stylesheet" type="text/css" />

<script src="jquery-3.2.1.js" type="text/javascript"></script>
<script>
function validateForm(){
	var username = document.loginform.username;
    var password = document.loginform.password;
    
	if(username.value =="")
	{
		alert("Please enter your username.")
        return false;
	}
	else if(password.value =="")
	{
		alert("Please enter your password.")
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
	<li><a href="Index.php" >Home</a> </li>
	<li><a href="aboutus.php">About us</a> </li>		
	
	<li><a href="login.php"> Login </a> </li>
	<li><a href="register.php"> Register </a> </li>
	</ul>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a> Follow us at:</a>	
 <a href="https://www.facebook.com/ElectricCarsReport/" target="blank"> <img src="images/facebook.png" width="30" height="30" /> </a>
 <a href="https://www.instagram.com/lucypet" target="blank"> <img src="images/instagram.jpg" width="30" height="30" /> </a>
 <a href="https://www.gmail.com" target="blank"> <img src="images/gmail.png" width="30" height="30" /> </a>

 
</nav>
   <!--<a href="#head" class="take-top"><img src="images/up-arrow.png" alt="box"></a>   -->
</header>

<form id="loginform" method="POST" name="loginform" id="login" onsubmit="return validateForm.call(this);">
<h3> Login Form </h3>
Username: <input type="text" name="username" placeholder="Enter your Username" id="username"><br/> <br/>

Password: <input type="password" name="password" placeholder="Enter Password"><br/> <br/>

<input type="submit" value="Login" name="login">

<p> Dont have an account? Create One </p>
<a href="register.php"> Create new account </a> 
</form>
<br/>


</body>
</html>

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