<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
	<?php
		session_start();
		if($_SESSION["id"]=="")
		{
			@header("Location:/index.php");
		}
		if($_SESSION["per"] != "RWX")
		{
			@header("Location:/index.php");
		}
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
		<link rel="shortcut icon" type="image/x-icon" href="../images/fave-icon.png" />
	    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
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
	<script type="text/javascript" src="../js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="../js/jquery.mixitup.min.js"></script>
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
		$gen1 = "User";
		$op1 = "filter active";
	}
	else
	{
		$gen1 = $gen;
	}
	if($gen1 == "User")
	{
		$op1 = "filter active";
	}
	if($gen1 == "Blog")
	{
		$op2 = "filter active";
	}
	if($gen1 == "Contact")
	{
		$op3 = "filter active";
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
                    <li><a href="search.php?page=1&gener=blog" >Search</a></li>
                    <?php if ($_SESSION["per"] == "RWX"){?>
                    <li  class="active"><a href="admin.php?gener=User&page=1">Admin</a></li>
                    <?php }?>
                    <li><a href="blog.php?page=1&gener=Mobile">Blog</a></li>
                    <?php if ($_SESSION["eml"] != ""){?>
                    <li><a href="profile.php" >Profile</a></li>
                    <?php }?>
                    <li><a href="about.php">About us</a></li>
                    <?php if ($_SESSION["eml"] != ""){?>
                    <li><a href="logout.php" >Logout</a></li>
                    <?php }?>
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
						<li><a href="admin.php?page=1&gener=User"><span class="<?php echo $op1;?>" data-filter="icon">Blogger</span></a></li>
						<li><a href="admin.php?page=1&gener=Blog"><span class="<?php echo $op2;?>" data-filter="web">Blog</span></a></li>
						<li><a href="admin.php?page=1&gener=Contact"><span class="<?php echo $op3;?>" data-filter="web">Contact</span></a></li>
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
				$sql = "SELECT * FROM ".$gen1." ORDER BY id DESC limit $page1,10";
				$result = $conn->query($sql) or die($conn->error);
				while($row = $result->fetch_assoc() ) {
				        $id = $row["id"];
				        	?>
				<div class="blog-articla-grid  portfolio1 logo1" data-cat="app">
					<div class="blog-articla-grid-info" style="width:100%;">
						<ul><?php if($gen1 == "Blog"){$heading = $row["heading"];$name = $row["uname"];$gener = $row["gener"];?>
							<li><a href="bsingle.php?blogid=<?php echo $id;?>">Heading:-<?php echo $heading; ?></a></p></li><br>
							<li><a href="userprofile.php?uid=<?php echo $id; ?>"><?php echo "username:-";echo $name; ?></a></li><br>
							<li><a href="blog.php?page=1&gener=<?php echo $gener;?>">gener:-<?php echo $gener; ?></a></li><br>
							<a class="artbtn" href="admin/dropb.php?blogid=<?php echo $id;?>">Delete</a>
							<?php }?>


							<?php if($gen1 == "User"){$permission = $row["permission"];$name = $row["uname"];?>
							<li><a href="userprofile.php?uid=<?php echo $id; ?>">Id:-<?php echo $id; ?></a></li><br>
							<li><a href="userprofile.php?uid=<?php echo $id; ?>">Username:-<?php echo $name; ?></a></li><br>
							<li><a href="blog.php?page=1&gener=<?php echo $gener;?>">permission:-<?php echo $permission; ?></a></li><br>
							<form action="admin/changeu.php" method="post">
							<select name="catagory" width="60%">
							  <option>RW-</option>
							  <option>R--</option>
							  <option>RWX</option>
							</select>
							<input type="hidden" name="id" value="<?php echo $id;?>">
							<input type="submit" value="Edit">
							</form><br>
							<a href="admin/deletec.php?blogid=<?php echo $id;?>">Delete</a>
							<?php }?>


							<?php if($gen1 == "Contact"){$name = $row["username"];$subj = $row["subject"];$email1 = $row["email"];$mobile = $row["mobile"];?>
							<li><a href="#">Username:-<?php echo $name; ?></a></p></li><br>
							<li><a href="#">Email:-<?php echo $email1; ?></a></li><br>
							<li><a href="#">Mobile:-<?php echo $mobile; ?></a></li><br>
							<li><a href="#">Subject<?php echo $subj; ?></a></li><br>
							<a class="artbtn" href="admin/dropcon.php?blogid=<?php echo $id;?>">Delete</a>
							<?php }?>
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
					$sql = "SELECT * FROM ".$gen1."";
					$res = $conn->query($sql) or die($conn->error);
					$noofrows = $res->num_rows;
					$noofrows = $noofrows/10;
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

