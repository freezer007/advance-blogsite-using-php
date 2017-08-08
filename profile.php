<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>About Me</title>
<link href="profile/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="profile/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js?ver=3.3"></script>	
<script type="text/javascript" src="profile/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="profile/js/jquery.easing.1.3.js"></script>

</head>

<body>
    <?php
// Set session variables
    // define variables and set to empty values
$email = $password = "";
$hidden = "text";
$hid = "submit";
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
    $forgot = "display: none;";
}
?>
<div id="header">
    <ul id="main-menu">
       <li><a href="index.php"> <span> </span></a></li>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="profile.php" style="<?php echo $dis ?>">Profile</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="signup/change.php">Change pasword</a></li>
        <li><a href="logout.php" style="<?php echo $dis ?>">Logout</a></li>
        <br>
        <div class="clear"> </div>
    </ul>
    </div>

<div id="container">

<!--Begin About Section-->
    <div id="about">
    	<h1>John Dev</h1>
        <ul id="top-social">
        	<li><a href="#" class="facebook">Facebook</a></li>
            <li><a href="#" class="twitter">Twitter</a></li>
            <li><a href="#" class="linkedin">LinkedIn</a></li>
        </ul>
        <div class="top-divider"></div>
        <div class="content">
        	<img src="profile/images/designer-photo.jpg" />
            <h2>My Name is John Doe, and I am a Designer</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras diam risus, dignissim pharetra sagittis sed, adipiscing nec felis. Maecenas non nulla eget ligula semper aliquet. Pellentesque adipiscing pulvinar tortor, a adipiscing felis commodo in. Vestibulum dui magna, mattis in bibendum a, congue vitae lectus. In eu odio tortor, vel congue lacus. Donec viverra viverra eros, in egestas ligula adipiscing non. Morbi et ultricies sapien. Duis metus odio, commodo in tempor quis, euismod et ligula. Vivamus tristique condimentum ipsum sit amet posuere.</p> 
            <ul id="service-icons">
            	<li class="services-design">Design</li>
                <li class="services-mobile">Mobile</li>
                <li class="services-film">Film</li>
                <li class="services-Movie">Movie</li>
            </ul>
        </div>
    <div class="bottom-divider"></div> 
    </div>
<!--End About Section-->

<!--Begin Experience Section-->   
    <div id="experience">
    	<h1>Experience</h1>
        <div class="top-divider"></div>
        <div class="content">
            <div class="col">
            <h2>Description of Work</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras diam risus, dignissim pharetra sagittis sed, adipiscing nec felis. Maecenas non nulla eget ligula semper aliquet. Pellentesque adipiscing pulvinar tortor, a adipiscing felis commodo in. Vestibulum dui magna, mattis in bibendum a, congue vitae lectus. In eu odio tortor, vel congue lacus. Donec viverra viverra eros, in egestas ligula adipiscing non. Morbi et ultricies sapien. Duis metus odio, commodo in tempor quis, euismod et ligula. Vivamus tristique condimentum </p>
            </div>
            
            <div class="col col-mid">
            <h2>Description of Work</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras diam risus, dignissim pharetra sagittis sed, adipiscing nec felis. Maecenas non nulla eget ligula semper aliquet. Pellentesque adipiscing pulvinar tortor, a adipiscing felis commodo in. Vestibulum dui magna, mattis in bibendum a, congue vitae lectus. In eu odio tortor, vel congue lacus. Donec viverra viverra eros, in egestas ligula adipiscing non. Morbi et ultricies sapien. Duis metus odio, commodo in tempor quis, euismod et ligula. Vivamus tristique condimentum </p>
            </div>
            
            <div class="col">
            <h2>Description of Work</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras diam risus, dignissim pharetra sagittis sed, adipiscing nec felis. Maecenas non nulla eget ligula semper aliquet. Pellentesque adipiscing pulvinar tortor, a adipiscing felis commodo in. Vestibulum dui magna, mattis in bibendum a, congue vitae lectus. In eu odio tortor, vel congue lacus. Donec viverra viverra eros, in egestas ligula adipiscing non. Morbi et ultricies sapien. Duis metus odio, commodo in tempor quis, euismod et ligula. Vivamus tristique condimentum </p>
            </div>
        </div>    
        <div class="bottom-divider"></div>
    </div>
<!--End Experience Section-->

<!--Begin Connect Section-->  
    <div id="connect">
    	<h1>My Blogs</h1>
        <div class="top-divider"></div>
        	<div class="content">
            	<div id="form">
                	<form action="#">
                    	<span>Name</span>
                        <input type="text" name="name" class="name" />
                        <span>Email</span>
                        <input type="text" name="email" class="email"/>
                        <span>Message</span>
                        <textarea class="message"></textarea>
                        <input type="submit" name="submite" value="Submit" class="submit">
                    </form>
                </div>
                <div id="social-footer">
                	<h2>Follow Me:</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras diam risus, dignissim pharetra sagittis sed, adipiscing nec felis. Maecenas non nulla eget ligula semper </p>
                    <ul id="sm-links">
                    	<li><a href="#" class="facebook">Facebook</a></li>
           				<li><a href="#" class="twitter">Twitter</a></li>
            			<li><a href="#" class="dribble">Dribble</a></li>
                        <li><a href="#" class="vimeo">Vimeo</a></li>
                        <li><a href="#" class="youtube">YouTube</a></li>
                        <li><a href="#" class="linkedin">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
    </div>
<!--End Connect Section--> 

</div>

 <!-- The JavaScript -->  
        <script type="text/javascript">
    		$(function() {
                $('#main-menu li a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInOutExpo');

                    event.preventDefault();
                });
            });
			
 			 $(document).ready(function(){
    		$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false, deeplinking: false});
  			});

        </script>
</body>
</html>
