<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Stylish Signup</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "god";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$email = "crazyperson769@gmail.com";
$hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
$password = rand(1000,5000); // Generate random number between 1000 and 5000 and assign it to a local variable.
$sql = "INSERT INTO activeuser (email, password, hash) VALUES(
'. mysql_escape_string($email) .', 
'. mysql_escape_string(md5($password)) .', 
'. mysql_escape_string($hash) .') " or die(mysql_error());

$to      = $email; // Send email to our user
$subject = "Signup | Verification"; // Give the email a subject 
$message = "
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
email: '.$email.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account:
http://localhost/emailverify.php?email=".$email."&hash=".$hash."
"; // Our message above including the link
                     
$headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
?>
		<!--header-->
		<div class="header-w3l">
			<h1>Stylish Signup Form</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-w3layouts-agileinfo">
	           <!--form-stars-here-->
						<div class="wthree-form">
							<h2>Fill out the form below to Signup</h2>
							<form action="../index.php" method="post">
								<div class="form-sub-w3">
									<input type="text" name="Username" placeholder="Username " required="" />
								</div>
								<div class="form-sub-w3">
									<input type="text" name="Date" placeholder="BirthDate (DD/MM/YYYY)" required="" />
								</div>
								<div class="form-sub-w3">
									<input type="text" name="Gender" placeholder="Gender(M/F)" required="" />>
								<div class="form-sub-w3">
									<input type="text" name="Country" placeholder="Contry" required="" />
								<div class="clear"></div>
								<div class="submit-agileits">
									<input type="submit" value="Singup">
								</div>
							</form>

						</div>
				<!--//form-ends-here-->

		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; 2017 Glassy Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
		<!--//footer-->
</body>
</html>