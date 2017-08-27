<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Limelight website for high end mobiles,like samsung nokia mobile website templates for free | Home :: w3layouts</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/fave-icon.png" />
	    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	   <script type="text/javascript">
			$(window).load(function(){
				$('div.description').each(function(){
					$(this).css('display', 'block');
				});
				
				$('div.content-top-grid').hover(function(){
					$(this).children('.description').stop().fadeTo(500, 1);
				},function(){
					$(this).children('.description').stop().fadeTo(500, 0);
				});
			});
	</script>
	</head>
	<body>
<?php
// Set session variables
	// define variables and set to empty values
$email = $password = "";
$hidden = "text";
$hid = "submit";
$pos = "hidden";
$dis = "display: none;";
$forgot = "";
$logout = "logout.php";
if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
    if(!isset($_SESSION["eml"])){
    	$_SESSION["eml"] = "";
  		$_SESSION["psw"] = "";
 	 }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $password = $_POST["password"];
  $email = $_POST["email"];
  $_SESSION["eml"] = $email;
  $_SESSION["psw"] = $password;
}
if ($_SESSION["eml"] != "")
{
	$hidden = $hid = "hidden";
	$dis = "";
	$pos= "submit";
	$forgot = "display: none;";
}
?>
		<!---start-wrap---->
		<div class="wrap">
		<!---strat-header---->
		<div class="header"> 
			<div class="logo">
				<a href="index.php"> </a>
			</div>
			<div class="top-nav">
				<ul>
					<li><a href="index.php"> <span> </span></a></li>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="blog.php?page=1&gener=Mobile">Blog</a></li>
					<li><a href="profile.php" style="<?php echo $dis ?>">Profile</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="logout.php" style="<?php echo $dis ?>">Logout</a></li>
					<div class="clear"> </div>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<!---//End-header---->
		<!---start-slider---->
		<div class="slider">
			<div class="wrap"> 
			<div class="slider-left">
				<em> </em>
				<h1>Premimum Design Graphic Resources Center</h1>
				<p>We Offer high quality design resources such as fonts, icons sets,web templates,backgrounds,and much more for <span>FREE!</span></p>
				<label>Join our mailling list & recevie a new freebie everday!</label>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<input type="<?php echo $hidden ?>" class="textbox" name="email" value="Email address.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address..';}">
					<input type="<?php echo $hidden ?>" class="textbox" name="password" value="Password.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password..';}"><input type="<?php echo $hid?>" value="Login" /><br>
					<a href="signup/forgot.php" style="<?php echo $forgot ?>"> Forgot Password</a>
					<p <?php echo $hid?>> dont have account ? <a href="signup/">Sign up</a></p>
				</form>
				<form method="post" action="cnew.php">
				<input type="<?php echo $pos?>" value="Create A New Blog" />
				</form>
			</div>
			<div class="slider-right">
				<img src="images/slider-img.png" alt="" />
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<!---//End-slider---->
		<!---start-content---->
		<!---start-articls---->
		<div class="blog-articlas">
			<div class="wrap">
				<div class="content-top-header">
					<h3>Latest News</h3>
					<p>Find out What's Going On</p>
				</div>
			<div class="clear"> </div>		
			<?php 
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "god";
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "SELECT id, uname, gener, blogdate,imsrc,heading,brief FROM blog ORDER BY blogdate DESC ";
				$result = $conn->query($sql) or die($conn->error);
				$n = 5;
				while($row = $result->fetch_assoc() and $n>0) {
				        $id = $row["id"];
				        $name = $row["uname"];
				        $gener = $row["gener"];
				        $date = $row["blogdate"];
				        $src = $row["imsrc"];
				        $heading = $row["heading"];
				        $brief = $row["brief"];
				        $n = $n-1?>
			<div class="blog-articla-grid">
					<div class="blog-articla-grid-pic">
						<a href="bsingle.php?blogid=<?php echo $id;?>"><img src="<?php echo $src; ?>" alt=" " /></a>
					</div>
					<div class="blog-articla-grid-info">
						<h3><a href="bsingle.php?blogid=<?php echo $id;?>"><?php echo $heading;?></a></h3>
						<ul>
							<li><p>post on <?php echo $date; ?></p></li>
							<li><a href="bsingle.php"> By <?php echo $name; ?></a></li>
							<li><a href="blog.php?page=1&gener=<?php echo $gener;?>">catagory :-<?php echo $gener; ?></a></li>
							<p class="artical-para"><?php echo $brief; ?>
							</p>
							<a class="artbtn" href="bsingle.php?blogid=<?php echo $id;?>">Read More</a>
						</ul>
					</div>
					<div class="clear"> </div>
			</div>


			<?php
				        	}

			$conn->close();
			?>
		<!---//End-articls---->
		<div class="bottom-grids">
			<div class="wrap"> 
			<div class="bottom-grid-left">
				<h3>Visit Our Shop</h3>
				<div class="bottom-grid-left-grid">
					<div class="bottom-grid-left-grid-left">
						<a href="#"><img src="images/bottom-pic.png" alt="" /></a>
					</div>
					<div class="bottom-grid-left-grid-right">
						<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam et dolore magna aliqua.</p>
						<a class="letbtn" href="#">Lets shop</a>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<div class="bottom-grid-right">
				<h3>Latest tweets</h3>
				<div class="bottom-grid-right-grid">
					<div class="bottom-grid-right-grid-left">
						
					</div>
					<div class="bottom-grid-right-grid-right">
						<p><span>Eiusmod:</span>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<span><a href="#">#incididunt</a></span>
						<label><a href="#">8 mins ago</a></label>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
				<div class="bottom-grid-right-grid">
					<div class="bottom-grid-right-grid-left">
						
					</div>
					<div class="bottom-grid-right-grid-right">
						<p><span>Eiusmod:</span>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<span><a href="#">#incididunt</a></span>
						<label><a href="#">2 days ago</a></label>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
		<!---//End-content---->
		<!---start-footer---->
		<div class="footer"> 
			<div class="wrap"> 
				<div class="footer-left">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="blog.php">Archive</a></li>
						<li><a href="contact.php">Contact</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="footer-center">
					<ul>
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span> </span></a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="footer-right">
					<p>Copyright &#169; 2013 Designer First. All Rights Reserved. Template By  <a href="http://w3layouts.com/">W3Layouts</a></p>
				</div>
				<div class="clear"> </div>
				</div>
		</div>
		<!---//End-footer---->
		<!---//End-wrap---->
		 </div>
	</body>
</html>

