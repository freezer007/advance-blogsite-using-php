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
						$sql = "SELECT * FROM blog WHERE id ='".$page1."'";
						$result = $conn->query($sql) or die($conn->error);
						while($row = $result->fetch_assoc()) {
				        $id = $row["id"];
				        $blogid = $id;
				        $creatorid = $row["userid"];
				        $name = $row["uname"];
				        $gener = $row["gener"];
				        $date = $row["blogdate"];
				        $src = $row["imsrc"];
				        $heading = $row["heading"];
				        $brief = $row["brief"];
				        $fullblog = $row["fullblog"];
				    	}
					    $conn->close();    ?>
					    <?php 
					    if($_SESSION["id"] == $creatorid)
					    {?>
								<a class="comment-replay" href="cedit.php?id=<?php echo $id;?>" style="float: right;">Edit the blog</a>
						<?php }?>
								<br>
						<h3><a href="#"><?php echo $heading; ?></a></h3>
						<ul>
							<li><a href="#">posted on :-<?php echo $date; ?></a></li>
							<li><a href="userprofile.php?uid=<?php echo $creatorid; ?>">posted by:-<?php echo $name; ?></a></li>
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
						$sql = "SELECT * FROM likes where choise = true and blogid ='".$page1."'";
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
						$conn->close();?>
						<a href="addlike.php?uid=<?php echo "1"; ?>&blogid=<?php echo  $page1;?>">like(<?php echo $ans;?>)</a>
						<hr/>
						<div class="artical-comments">
							<h2>Comments</h2>
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

							$sql = "SELECT * FROM comment where blogid = '".$page1."' ORDER BY commentdate DESC ";
							$result = $conn->query($sql) or die($conn->error);
							while($row = $result->fetch_assoc()) {
									$cid = $row["id"];
							        $name = $row["uname"];
							        $commendate = $row["commentdate"];
							        $commen = $row["comment"];
							        ?>
							<div class="artical-comment-grid">
								<div class="artical-comment-grid-left">
									<a href="#"><img src="images/commenter-pic1.png"  alt="" /></a>
								</div>
								<div class="artical-comment-grid-right">
									<h4><a href="#"><?php echo $name; ?></a></h4>
									<span><a href="#"><?php echo $commendate; ?></a></span>
									<p><?php echo $commen; ?></p>
									<div id="makeithidden<?php echo $cid?>" style="">
									<a class="comment-replay" href="#" onclick="return runMyFunction(<?php echo $cid?>);">Click to Replay</a>
									</div>
									<div class="leave-comment-form">
									<div class="leve-comment">
									<form id="replyform<?php echo $cid?>" action="bsinglereply.php" method="post" style="height: 0px;width: 0px;overflow:hidden;">
									<textarea name="areply" maxlength="100">Enter reply..</textarea>
									<input type="hidden" name="uname" value="admin">
									<input type="hidden" name="usrid" value="1">
									<input type="hidden" name="cid" value="<?php echo $cid;?>">
									<input type="hidden" name="bloid" value="<?php echo $page1;?>">
									<input type="submit" value="Post-reply" />
									</form>
									</div></div>
								</div>
								<div class="clear"> </div>
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

							$sql = "SELECT * FROM reply where commentid = '".$cid."' ORDER BY reply DESC ";
							$result2 = $conn->query($sql) or die($conn->error);
							while($row = $result2->fetch_assoc()) {
							        $name = $row["uname"];
							        $repldate = $row["replydate"];
							        $repl = $row["reply"]; 
							?>
							<div class="artical-comment-grid sub-comment-grid">
								<div class="artical-comment-grid-left">
									<a href="#"><img src="images/commenter-pic.png"  alt="" /></a>
								</div>
								<div class="artical-comment-grid-right">
									<h4><a href="#"><?php echo $name; ?></a></h4>
									<span><a href="#"><?php echo $repldate; ?></a></span>
									<p><?php echo $repl; ?></p>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="clear"> </div>
							<?php
								}
								}
							$conn->close();
							?>
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
						<script type="text/javascript">
							function runMyFunction(x)
							{
								var a = "makeithidden"+x;
								var b = "replyform"+x;
								a = document.getElementById(a);
								b = document.getElementById(b);
								b.setAttribute("style","");
								a.setAttribute("style","height: 0px;width: 0px;overflow:hidden;");
								return false;
							}
						</script>
	</body>
</html>

