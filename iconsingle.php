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
	?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Limelight website for high end mobiles,like samsung nokia mobile website templates for free | icons :: w3layouts</title>
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
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
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
					<li><a href="blog.php">Blog</a></li>
					<li><a href="#">Fonts</a></li>
					<li><a href="#">Templates</a></li>
					<li class="active"><a href="icons.php">Icons</a></li>
					<li><a href="#">Wordpress</a></li>
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
					<h3>Icons</h3>
				</div>
			</div>
			<ul id="filters" class="clearfix">
				<div class="wrap"> 
						<li><span class="filter active" data-filter="app card icon logo web">All</span></li>
						<li><span class="filter" data-filter="app">E-commerce</span></li>
						<li><span class="filter" data-filter="card">Misc</span></li>
						<li><span class="filter" data-filter="icon">Social Media</span></li>
						<li><span class="filter" data-filter="logo">Weather</span></li>
						<li><span class="filter" data-filter="web">Web</span></li>
						<div class="clear"> </div>
				</div>
			</ul>
			<div class="wrap"> 
				<div class="icons-single">
					<div class="icons-single-left">
						<h3><a href="#">Woocons - Free Icons Set</a></h3>
						<a href="#"><img class="icons-big" src="images/icons1.png" alt="" /></a>
						<ul>
							<li><a href="#"><img src="images/4icons.png" alt="" /></a></li>
							<li><a href="#"><img src="images/4icons.png" alt="" /></a></li>
							<li><a href="#"><img src="images/4icons.png" alt="" /></a></li>
							<div class="clear"> </div>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
					</div>
					<div class="icons-single-right">
						<div class="icons-sidebar"> 
							<a class="downloadbtn" href="#">Download</a>
							<div class="pack-details">
								<h4>File Details</h4>
								<ul>
									<li><a href="#"><img src="images/user-icon.png" alt="" /> Caludio Gomboli</a></li>
									<li><a href="#"><img src="images/clock.png" alt="" /> Jun 28,2013</a></li>
									<li><a href="#"><img src="images/floder.png" alt="" /> PSD,TXT</a></li>
									<li><a href="#"><img src="images/download.png" alt="" /> 3.28 MB</a></li>
									<li><a href="#"><img src="images/infinity.png" alt="" />1,925 Dwnlopads</a></li>
									<li><a href="#"><img src="images/text.png" alt="" />Creative Commons 3.0</a></li>
								</ul>
							</div>
							<div class="article article1">
							<ul>
								<li class="twitter ctwitter"><a href="">1250</a></li>
								<li class="facebook cfacebook"><a href="">100</a></li>
								<li class="pinterest cpinterest"><a href="">328</a></li>
							</ul>
						</div>
						</div>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="artical-comments">
							<h2>Comments</h2>
							<div class="artical-comment-grid">
								<div class="artical-comment-grid-left">
									<a href="#"><img src="images/commenter-pic1.png" alt=""></a>
								</div>
								<div class="artical-comment-grid-right">
									<h4><a href="#">Uku Mason</a></h4>
									<span><a href="#">June 12,2013</a> - 12:50 AM</span>
									<p>Passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't?</p>
									<a class="comment-replay" href="#">Click to Replay</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="artical-comment-grid sub-comment-grid">
								<div class="artical-comment-grid-left">
									<a href="#"><img src="images/commenter-pic.png" alt=""></a>
								</div>
								<div class="artical-comment-grid-right">
									<h4><a href="#">Designer frist</a></h4>
									<span><a href="#">June 12,2013</a> - 12:50 AM</span>
									<p>Passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't?</p>
									<a class="comment-replay" href="#">Click to Replay</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="clear"> </div>
							<div class="artical-comment-grid">
								<div class="artical-comment-grid-left">
									<a href="#"><img src="images/commenter-pic1.png" alt=""></a>
								</div>
								<div class="artical-comment-grid-right">
									<h4><a href="#">Ro Kanth</a></h4>
									<span><a href="#">June 12,2013</a> - 12:50 AM</span>
									<p>Passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't?</p>
									<a class="comment-replay" href="#">Click to Replay</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="leave-comment-form">
							<div class="leve-comment">
								<h2>Leave a Comment</h2>
								<form>
									<div>
										<span>Name<label>*</label></span>
										<input type="text"> 
									</div>
									<div>
										<span>Email<label>*</label></span>
										<input type="text"> 
									</div>
									<div>
										<span>Your Comment<label>*</label></span>
										<textarea> </textarea>
									</div>
									<input type="submit" value="Post-comment">
								</form>
							</div>
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

