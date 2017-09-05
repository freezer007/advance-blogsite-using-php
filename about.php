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
                    <li><a href="search.php?page=1&gener=blog" >Search</a></li>
                    <?php if ($_SESSION["per"] == "RWX"){?>
                    <li><a href="admin.php?gener=User&page=1">Admin</a></li>
                    <?php }?>
                    <li><a href="blog.php?page=1&gener=Mobile">Blog</a></li>
                    <?php if ($_SESSION["eml"] != ""){?>
                    <li><a href="profile.php" >Profile</a></li>
                    <?php }?>
                    <li class="action"><a href="about.php">About us</a></li>
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
		<!---strat-about---->
		<div class="about">
			<div class="wrap"> 
				<h3>What This Is All About</h3>
				<p>This is my personal college project from software tools lab for creating blogging site.This site is created using only php,html and javascript.</p>
				<p>This is most awesome site. I hope you like it.</p>
				<div class="about-top-grids">
					<div class="top-grid">
						<a href="#"><img src="images/cal.png" alt="" /></a>
						<h4><a href="#">No 1 site</a></h4>
					</div>
					<div class="top-grid">
						<a href="#"><img src="images/gift.png" alt="" /></a>
						<h4><a href="#">Good giveaways</a></h4>
					</div>
					<div class="top-grid">
						<a href="#"><img src="images/retina.png" alt="" /></a>
						<h4><a href="#">Always updated</a></h4>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="team">
					<h3>Meet Me!</h3>
					<div class="team-grids">
						<a href="#"><img src="images/pp.jpg" alt="" /></a><br><h4><a href="#" style="font-size: 32px">Milan Gasuwami</a></h4><span>Founder,CEO,Code Master,Marketing Expert,Design Guru</span>
						    <p>A student from svnit + creator of Lime light and the only family this lonely project has.<br>My other details are confidential so dont try to find more about me.</p>	
						</div>
						<div class="clear"> </div>
					</div>
				</div>
			</div>
		</div>
		<!---End-about---->
		<div class="contact">	
			<div class="wrap"> 			
			<h2 class="style"><a href="#">Get in Touch</a></h2>
					<div class="contact_info">
			    	 		<div class="map">
					   			<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#666;text-align:left;font-size:0.85em">View Larger Map</a></small>
					   		</div>
      				</div>
				  <div class="contact-form">
					<h2 class="style"><a href="#">Contact Us</a></h2>
					    <form method="post" action="admin/addc.php">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox" maxlength="30"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox" maxlength="30"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox" maxlength="10"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg" maxlength="250"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="" value="Submit us"></span>
						  </div>
					    </form>
				    </div>
  				<div class="clear"> </div>		
			  </div>
			</div>
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

