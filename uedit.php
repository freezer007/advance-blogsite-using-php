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
if($_SESSION["per"] == "R--")
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
		<title>Limelight website for high end mobiles,like samsung nokia mobile website templates for free | icons :: w3layouts</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/fave-icon.png" />
	    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<style>
/* The Modal (background) */
div.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
div.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
span.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

span.close:hover,
span.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
	</head>
	<body>
	<script>  
	function validateform(){        
	var title=document.forms["myform"]["title"].value;
	if(title.length == 0 || title.length > 30)  
      {
      	document.forms["myform"]["title"].focus();
        return false;      
      }
     var title = document.forms["myform"]["img123"].src;
     document.forms["myform"]["image"].value = title;
	return true;
}
function changeurl()
{
	var url=document.getElementById('urlb').value;
	document.forms["myform"]["img123"].src = url;
	document.forms["myform"]["image"].value = url;
	document.forms["myform"]["editor1"].focus();
}
</script>
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
<?php
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
		$id = $_GET["id"];
		$sql = "SELECT * FROM user WHERE id='".$_SESSION["id"]."'";

		$result = $conn->query($sql) or die($conn->error);
						while($row = $result->fetch_assoc()) {
				        $id = $row["id"];
				        $name = $row["uname"];
				        $gender = $row["gender"];
				        $src = $row["imsrc"];
				        $description = $row["description"];
				    	}
		$conn->close();
?>
		<!---//End-header---->
		<!---start-content---->
		<!---start-blog-sinle-page---->
		<form name="myform" action="ueditc.php" method="post" onsubmit="return validateform()"> 

				<!-- The Modal -->
			<div class="blog-single">
				<div class="wrap"> 
					<div class="blog-single-header">
						<a href="#"><img src="<?php echo $src; ?>" id="myBtn" name="img123" width="30%" height="50%"><br></a>
						User name:-<input type="text" name="title" style="border: solid 5px #c9c9c9;width: 60%;height: 10%;font-size: 18px;" maxlength="30" value="<?php echo $name; ?>" required=""><br></br>
						<input type="hidden" name="image">
						<br><br>
						Select a Gender:-<select name="catagory" width="60%">
						  <option>M</option>
						  <option>F</option>
						</select>
						<h3><a href="#">Edit your description in My awesome editor</a></h3>
					</div>
				</div>
			</div>
			<script src="ckeditor/ckeditor.js"></script>
			<textarea name="editor1" height="100%" maxlength="2500" required=""><?php echo $description; ?></textarea>
			<input type="submit" name="blog" style="    float: left;position: relative;left: 45%;background: #86C840;font-family: 'Open Sans', sans-serif;font-size: 0.9em;color: #FFF;border: 1.2px solid rgba(168, 168, 168, 0.33);border-radius: 0.2em;outline:none;transition:0.5s all;-webkit-transition:0.5s all;-moz-transition:0.5s all;-o-transition:0.5s all;border: none;cursor: pointer;padding:.7em 1.6em" value="SUBMIT">
			<br><br>
			</form>
			<div id="myModal" class="modal">
					  <!-- Modal content -->
				  <div class="modal-content">
				    <span class="close">&times;</span>
				    Enter Url for image  :<input type="text" id="urlb" style="width: 60%;height: 5%;font-size: 16px;"><br>
				    <input type="button" name="send" style=" border: 1px solid;background-color: #33333;width: 100%;height: 5%;font-size: 16px;font-color: #111111" value="change image" onclick="changeurl()">
				  </div>

			</div>
			<script>
            CKEDITOR.replace( 'editor1' );
        	</script>
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
		 <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
	</body>
</html>

