<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Stylish verify</title>
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
$message = "";
if($_GET["email"] != "" AND $_GET["hash"] != "")
{
    // Verify data
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
	
	$sql = "SELECT email, hash, isactive FROM user WHERE email='".$_GET["email"]."' AND hash='".$_GET["hash"]."' AND isactive='0'";
	$result = $conn->query($sql) or die($conn->error);
	$match  = $result->num_rows;
	echo $match;
	if($match > 0){
        // We have a match, activate the account
        $sql = "UPDATE user SET isactive='1' WHERE email='".$_GET["email"]."' AND hash='".$_GET["hash"]."' AND isactive='0'";
		$result = $conn->query($sql) or die($conn->error);
        $message = "Your account has been activated, you can now login";
    }else{
        // No match -> invalid url or account has already been activated.
         $message = "The url is either invalid or you already have activated your account";
    }
    $conn->close();
}
else{
    // Invalid approach
     $message = "Invalid approach, please use the link that has been send to your email";
 }
?>
		<!--header-->
		<div class="header-w3l">
			<h1><?php echo $message;?></h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-w3layouts-agileinfo">
	           <!--form-stars-here-->
						<div class="wthree-form">
							<h1><a href="../index.php" style="color:#FF8">Go back</a></h1>
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