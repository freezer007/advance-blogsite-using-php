<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
	<?php
	// define variables and set to empty values
$email = $password = "";
$_SESSION["eml"] = "";
$_SESSION["psw"] = "";
$_SESSION["per"] = "";
$_SESSION["id"] = "";
@header("Location:index.php");

	?>

	</body>
</html>

