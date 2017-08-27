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
		<title>Limelight website for high end mobiles,like samsung nokia mobile website templates for free | icons :: w3layouts</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/fave-icon.png" />
	    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
		<!---start-blog-sinle-page---->
			<div class="blog-single">
				<div class="wrap"> 
					<div class="blog-single-header">
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
						$page = $_GET["blogid"];
						if($page == "")
						{
							$page1 = 1;
						}
						else
						{
							$page1 = $page;
						}
						$sql = "SELECT id, uname, gener, blogdate,imsrc,heading,brief,fullblog FROM blog WHERE id ='".$page1."'";
						$result = $conn->query($sql) or die($conn->error);
						while($row = $result->fetch_assoc()) {
				        $id = $row["id"];
				        $blogid = $id;
				        $name = $row["uname"];
				        $gener = $row["gener"];
				        $date = $row["blogdate"];
				        $src = $row["imsrc"];
				        $heading = $row["heading"];
				        $brief = $row["brief"];
				        $fullblog = $row["fullblog"];
				    	}
					    $conn->close();    ?>
						<h3><a href="#"><?php echo $heading; ?></a></h3>
						<ul>
							<li><a href="#">posted on :-<?php echo $date; ?></a></li>
							<li><a href="#">posted by:-<?php echo $name; ?></a></li>
							<li><a href="blog.php?page=1&gener=<?php echo $gener;?>"><?php echo $gener; ?></a></li>
						</ul>
						</div>
						<div class="blog-single-artical">
							<a href="#"><img src="<?php echo $src; ?>" alt="" style="padding-left:25%;width:50%"/></a><br/>
							<?php echo $fullblog; ?>
						</div>
						<hr />
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
						$sql = "SELECT * FROM likes where choise = 'Like'";
						$result = $conn->query($sql) or die($conn->error);
						$ans = $result->num_rows;
						if($result->num_rows > 0)
						{
							$dis = "none";
						}
						else
						{
							$dis = "";
						}
						$sql = "SELECT * FROM likes where choise = 'Dislike'";
						$result = $conn->query($sql) or die($conn->error);
						$ans = $result->num_rows;
						if($result->num_rows > 0)
						{
							$dis2 = "";
						}
						else
						{
							$dis2 = "none";
						}
						$conn->close();?>
						<a href="#" style="pointer-events: <?php echo $dis;?>;cursor: default;">like(<?php echo $ans;?>)</a><a href="#" style="float:right;pointer-events: <?php echo $dis2;?>;cursor: default;">dislike(<?php echo $ans;?>)</a>
						<hr/>
						<div class="artical-comments">
							<h2>Comments</h2>
							<div class="artical-comment-grid">
								<div class="artical-comment-grid-left">
									<a href="#"><img src="images/commenter-pic1.png"  alt="" /></a>
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
									<a href="#"><img src="images/commenter-pic.png"  alt="" /></a>
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
									<a href="#"><img src="images/commenter-pic1.png"  alt="" /></a>
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
						<div class="clear"> </div>
						<!-----start-leavea comment---->
						<div class="leave-comment-form">
							<div class="leve-comment">

								<h2>Leave a Comment</h2>
								<form action="bsinglecomment.php" method="post">
									<div>
										<span>Your Comment<label>*</label></span>
										<textarea name="acomment" maxlength="100"> </textarea>
										<input type="hidden" name="uname" value="admin">
										<input type="hidden" name="usrid" value="1">
										<input type="hidden" name="blgid" value="<?php echo $page1;?>">
									</div>
									<input type="submit" value="Post-comment" />
								</form>
							</div>
						</div>
						<!-----//End-leavea comment---->
				</div>
			</div>
		<!---//End-blog-sinle-page---->
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

