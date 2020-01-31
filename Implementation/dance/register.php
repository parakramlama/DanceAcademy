<?php
include 'connect.php';

	if (isset($_POST['submit'])) {
   
	    $name = $_POST['name'];
		$Gender = $_POST['gender'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$dob = $_POST['dob'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		$qry_ins="insert into users values ('','$name','$Gender',
		'$email','$phone','$dob','$username','$password','$repassword')";

		if($conn->query($qry_ins) == FALSE)
		{
			die("Connection Failed: ".$conn->error);
		}
		echo "User registered";
	}

	if(isset($_POST['update']))
	{
		$name = $_POST['full_name'];
		$Gender = $_POST['gender'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$dob = $_POST['dob'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$type = "User";

		$qry_ins="UPDATE users SET full_name='$full_name'
         WHERE id='$_GET[id]'";
		if($conn->query($qry_ins) == FALSE)
		{
			die("Connection Failed: ".$conn->error);
		}
		echo "User registered";
	}

if(isset($_GET['id']))
{
	// selection of particular row
	$qryp = "SELECT * FROM users WHERE id='$_GET[id]'";
	$resp = $conn->query($qryp);
	while($datap = $resp->fetch_assoc())
	{
		$n = $datap['full_name'];
		$g = $datap['gender'];
		$e = $datap['email'];
		$p = $datap['phone'];
		$d = $datap['dob'];
		$un = $datap['username'];
		$pw = $datap['password'];
		$rpw = $datap['repassword'];
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Registration Form </title>
	<link href="dance2.css" rel="stylesheet" type="text/css" />
	<style>
		#nav
		{
			display:none;
		}
	</style>
	<script src="jquery-3.2.1.js" type="text/javascript"></script>

	<script type="text/javascript">
		function validateForm(){
		var name = document.registrationform.name;
	    var gender = document.registrationform.gender;
		var email = document.registrationform.email;
	    var phone = document.registrationform.phone;
	    
	    var dob = document.registrationform.dob;
	   
	    var username = document.registrationform.username;
	    var password = document.registrationform.password;
	    var repassword = document.registrationform.repassword;
		
		if(name.value =="")
		{
			alert("Please enter your name.");
			return false;
		}
		else if(!/^[A-Za-z\s]+$/.test(name.value))
		{
			alert("Please enter alphabets only for name.")
			return false;
		}
		else if(gender.value =="")
		{
			alert("Please select your Gender.")
	        return false;
		}
		else if(email.value =="")
		{
			alert("Please enter your Email address.")
	        return false;
		}
		else if(phone.value =="")
		{
			alert("Please enter your Phone number.")
	        return false;
		}
		   
	    else if(dob.value =="")
		{
			alert("Please enter your date of birth.")
	        return false;
		}

		else if(username.value =="")
		{
			alert("Please enter your username.")
	        return false;
		}
		else if(password.value =="")
		{
			alert("Please enter your password.")
	        return false;
		}
		
		else if(repassword.value =="")
		{
			alert("Please re-enter your password.")
	        return false;
		}
		else if(password.value!=repassword.value)
		{
			alert("Passwords do not match.")
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
            	<li><a href="Index.php" >Home</a> </li>
            	<li><a href="aboutus.php">About us</a> </li>			
            	<li><a href="login.php"> Login </a> </li>
            	<li><a href="register.php"> Register </a> </li>
        	</ul>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <a> Follow us at:</a>	
            <a href="https://www.facebook.com/ElectricCarsReport/" target="blank"> 
            <img src="images/facebook.png" width="40" height="40" /> </a>
            <a href="https://www.instagram.com/lucypet" target="blank"> 
            <img src="images/instagram.jpg" width="40" height="40" /> </a>
            <a href="https://www.gmail.com" target="blank"> 
            <img src="images/gmail.png" width="40" height="40" /> </a>
        </nav>
       <!--<a href="#head" class="take-top"><img src="images/up-arrow.png" alt="box"></a>   -->
    </header>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" 
		name="registrationform" id="registration" onsubmit="return validateForm.call(this);">
		<h1>Registration Form</h1>
		Name : <br /><input type="text" name="name" tabindex="1"/><br/>
		Gender : <br /> <input type="text" name="gender" tabindex="2" /> <br />
		Email : <br /><input type="email" name="email" tabindex="3"/><br/> 
		Phone Number : <br /><input type="text" name="phone" tabindex="4"/> <br/>
		Date of Birth: <br /><input type="date" name="dob" tabindex="7"><br/>
		Username: <br /><input type="text" name="username" tabindex="9"><br/>
		Password: <br /><input type="password" name="password" tabindex="10"><br/>
		Re-Password: <br /><input type="password" name="repassword" tabindex="11"><br/>
		<input type="submit" tabindex="11" name="submit" value="Submit" />
		<input type="reset" tabindex="12" name="reset" value="Reset" />
		<br/>
	</form>

	</fieldset>
		<!--</div>
		</div>-->

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