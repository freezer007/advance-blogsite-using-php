<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
	<?php
		session_start();
		$dis = "display: none;";
		if ($_SESSION["eml"] != "")
{
	$dis = "";
}
	?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Limelight website for high end mobiles,like samsung nokia mobile website templates for free | Blog :: w3layouts</title>
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
	<!---start-blog---->
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio1',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio1').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -2}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
	});	
	</script>
	<!---//start-blog---->
	</head>
	<body>
	<?php 
	$gen = $_GET["gener"];
	$op1 = "filter";
	$op2 = "filter";
	$op3 = "filter";
	$op4 = "filter";
	if($gen == "")
	{
		$gen1 = "Mobile";
		$op1 = "filter active";
	}
	else
	{
		$gen1 = $gen;
	}
	if($gen1 == "Mobile")
	{
		$op1 = "filter active";
	}
	if($gen1 == "Technology")
	{
		$op2 = "filter active";
	}
	if($gen1 == "Study")
	{
		$op3 = "filter active";
	}
	if($gen1 == "Other")
	{
		$op4 = "filter active";
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
					<li><a href="index.php">Home</a></li>
					<li  class="active"><a href="blog.php?page=1">Blog</a></li>
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
		<!---start-content---->
		<!---start-blog---->
		<div class="blog">
			<div class="wrap">
				<div class="blog-header">
					<h3>Blog</h3>
				</div>
			</div>
			<ul id="filters" class="clearfix">
				<div class="wrap"> 
						<li><a href="blog.php?page=1&gener=Mobile"><span class="<?php echo $op1;?>" data-filter="icon">Mobile</span></a></li>
						<li><a href="blog.php?page=1&gener=Technology"><span class="<?php echo $op2;?>" data-filter="web">Technology</span></a></li>
						<li><a href="blog.php?page=1&gener=Study"><span class="<?php echo $op3;?>" data-filter="app card icon logo web">Study</span></a></li>
						<li><a href="blog.php?page=1&gener=Other"><span class="<?php echo $op4;?>" data-filter="web2">Other</span></a></li>
						<div class="clear"> </div>
				</div>
			</ul>
			<div class="wrap"> 
			<div class="blog-grids" id="portfoliolist">
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
				$page = $_GET["page"];
				if($page == "" || $page == "1")
				{
					$page1 = 0;
				}
				else
				{
					$page1 = ($page*5) - 5;
				}
				$sql = "SELECT * FROM blog WHERE gener ='".$gen1."' ORDER BY blogdate DESC limit $page1,5";
				$result = $conn->query($sql) or die($conn->error);
				$n = 5;
				while($row = $result->fetch_assoc() and $n>0) {
				        $id = $row["id"];
				        $name = $row["uname"];
				        $creatorid = $row["userid"];
				        $gener = $row["gener"];
				        $date = $row["blogdate"];
				        $src = $row["imsrc"];
				        $heading = $row["heading"];
				        $brief = $row["brief"];
				        $n = $n-1?>
				<div class="blog-articla-grid  portfolio1 logo1" data-cat="app">
					<div class="blog-articla-grid-pic">
						<a href="bsingle.php?blogid=<?php echo $id;?>"><img src="<?php echo $src; ?>" style="width:800px"" alt=" " ></a>
					</div>
					<div class="blog-articla-grid-info">
						<h3><a href="bsingle.php?blogid=<?php echo $id;?>"><?php echo $heading; ?></a></h3>
						<ul>
							<li><p>post on<?php echo $date; ?></p></li>
							<li><a href="userprofile.php?uid=<?php echo $creatorid; ?>"><?php echo $name; ?></a></li>
							<li><a href="blog.php?page=1&gener=<?php echo $gener;?>"><?php echo $gener; ?></a></li>
							<p class="artical-para"><?php echo $brief; ?>
							</p>
							<a class="artbtn" href="bsingle.php?blogid=<?php echo $id;?>">Read More</a>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
			<?php
			 	}
			?>
			</div>
			</div>
			<div class="clear"> </div>
			<div class="icons-pagenate">
				<ul>
				<li><a class="frist-page" href="blog.php?page=1&gener=<?php echo $gen1;?>"> </a></li>
				<?php 
					$sql = "SELECT * FROM blog where gener = '".$gen1."'";
					$res = $conn->query($sql) or die($conn->error);
					$noofrows = $res->num_rows;
					$noofrows = $noofrows/5;
					$a = ceil($noofrows);
					for($b=1;$b<=$a;$b++)
					{
						?>
					<li><a href="blog.php?page=<?php echo $b;?>&gener=<?php echo $gen1;?>"><?php echo $b;?></a></li>
				<?php
					}
				$conn->close();
				?><li><a class="last-page" href="blog.php?page=<?php echo $b-1;?>&gener=<?php echo $gen1;?>"> </a></li>
					<div class="clear"> </div>
				</ul>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
		<!---//End-blog---->
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

