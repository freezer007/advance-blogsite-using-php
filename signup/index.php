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
<script>  
	function validateform(){    
	var pass=document.forms["myform"]["pass"].value;
	var repass = document.forms["myform"]["repass"].value;
	var Gender = document.forms["myform"]["Gender"].value;
	var Country = document.forms["myform"]["Country"].value;
	var len = pass.length;
	var x=document.forms["myform"]["Email"].value;  
	var atposition=x.indexOf("@");  
	var dotposition=x.lastIndexOf(".");  
	if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
	    document.forms["myform"]["Email"].value="";
	    document.forms["myform"]["Email"].placeholder = "Invailid Email";
	    document.forms["myform"]["Email"].focus();
	    return false;
	}
	if(pass != repass || len<8)
	{
		document.forms["myform"]["pass"].value="";
	    document.forms["myform"]["pass"].placeholder = "Password is not same or length is < 8";
	    document.forms["myform"]["repass"].value="";
	    document.forms["myform"]["repass"].placeholder = "Password is not same or length is < 8";
		document.forms["myform"]["pass"].focus();
		return false;
	}
	if(Country != "india")
	{
		document.forms["myform"]["Country"].value="";
	    document.forms["myform"]["Country"].placeholder = "Only india is vailid";
		document.forms["myform"]["Country"].focus();
		return false;
	}
	if(Gender != "M")
	{
		if(Gender != "F")
		{
			document.forms["myform"]["Gender"].value="";
	   		document.forms["myform"]["Gender"].placeholder = "use M/F in Gender";
			document.forms["myform"]["Gender"].focus();
			return false;
		}
	}
}
</script>
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
							<form name="myform" action="verify.php" method="post" onsubmit="return validateform()" >
								<div class="form-sub-w3">
									<input type="text" name="Username" placeholder="Username " required="" />
								</div>
								<div class="form-sub-w3">
									<input type="text" name="Email" placeholder="Email " required="" />
								</div>
								<div class="form-sub-w3">
									<input type="password" name="pass" placeholder="Enter Password " required="" />
								</div>
								<div class="form-sub-w3">
									<input type="password" name="repass" placeholder="ReEnter Password " required="" />
								</div>
								<div class="form-sub-w3">
									<input type="text" name="Gender" placeholder="Gender(M/F)" required="" />
								</div>
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