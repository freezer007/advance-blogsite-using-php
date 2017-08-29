<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
	<?php
		session_start();
		echo $_SESSION["eml"];
		echo "<br>";
		echo $_SESSION["psw"];
		$dis = "display: none;";
		if ($_SESSION["eml"] != "")
{
	$dis = "";
}
	?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Limelight website for high end mobiles,like samsung nokia mobile website templates for free | about :: w3layouts</title>
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
					<li><a href="index.php">Home</a></li>
					<li><a href="blog.php?page=1">Blog</a></li>
					<li><a href="profile.php" style="<?php echo $dis ?>">Profile</a></li>
					<li class="active"><a href="about.php">About us</a></li>
					<li><a href="logout.php" style="<?php echo $dis ?>">Logout</a></li>
					<div class="clear"> </div>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
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
						$page = $_GET["uid"];
						if($page == "")
						{
							$page1 = 1;
						}
						else
						{
							$page1 = $page;
						}
						$sql = "SELECT id, uname, email, imsrc ,gender,description FROM user WHERE id ='".$page1."'";
						$result = $conn->query($sql) or die($conn->error);
						while($row = $result->fetch_assoc()) {
				        $id = $row["id"];
				        $name = $row["uname"];
				        $email = $row["email"];
				        $src = $row["imsrc"];
				        $gender = $row["gender"];
				        $description = $row["description"];
				    	}
				    	if($gender == "M")
				    	{
				    		$gender = "male";
				    	}
				    	else
				    	{
				    		$gender = "female";
				    	}
				    	$sql = "SELECT * FROM follow where follows = true and userid ='".$page1."'";
						$result = $conn->query($sql) or die($conn->error);
						$followers = $result->num_rows;
					    $conn->close(); 
					    if($id == $_SESSION["id"])
					    {
					    	$display = "display: none;";
					    	$notdisplay = ""; 
					    }
					    else
					    {
					    	$notdisplay = "display: none;";
					    	$display = "";
					    }

					       ?>
		<!---//End-header---->
		<!---start-content---->
		<!---strat-about---->
		<div class="about">
			<div class="wrap">
			<div id="makeithidden" style="<?php echo $display;?>">
				<a class="comment-replay" href="uedit.php?id=<?php echo $id;?>" style="float: right;">Edit the profile page</a>
			</div><br><div id="makeithidden" style="<?php echo $notdisplay;?>">
				<a class="comment-replay" href="addfollow.php?userid=<?php echo $page1;?>" style="float: right;">follow(<?php echo $followers;?>)</a>
			</div><br>
					<h3>about <?php echo $name;?></h3>
					<div class="team-grids">
						<a href="#"><img src="<?php echo $src; ?>" alt="" /></a><br><h4><a href="#" style="font-size: 32px">name:-<?php echo $name;?></a></h4><span>email :-<?php echo $email;?><br>gender :-<?php echo $gender;?></span>
						    <p> <?php echo $description;?></p>	
						</div>
						<div class="clear"> </div>
					</div>
				</div>
			</div>
		</div>
		<!---End-about---->
		<!---//End-content---->
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
						<li><a href="blog.php?page=1">Archive</a></li>
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

