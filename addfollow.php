<?php
session_start();
if(isset($_SESSION["id"]))
{
	@header("Location:/index.php");
}
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

$userid = $_GET["userid"];

$sql = "SELECT * FROM follow where followerid = '".$_SESSION["id"]."' and userid = '".$userid."'";
$result = $conn->query($sql) or die($conn->error);
$ans = $result->num_rows;
echo $ans;
if($result->num_rows == 0){
$sql = "INSERT INTO follow (followerid, userid, follows)
        VALUES ('".$_SESSION["id"]."','".$userid."',true)";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
}
else{
	$sql = "SELECT * FROM follow where followerid = '".$_SESSION["id"]."' and userid = '".$userid."' and follows = true";
	$result = $conn->query($sql) or die($conn->error);
	$ans = $result->num_rows;
	echo $ans;
	echo "<br>";
	if($result->num_rows != 0){
	$sql = "UPDATE follow SET follows = false where followerid = '".$_SESSION["id"]."' and userid = '".$userid."' and follows = true";

			if ($conn->query($sql) === TRUE) {
			    echo "record updated successfully is false";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	else{
	$sql = "UPDATE follow SET follows = true where followerid = '".$_SESSION["id"]."' and userid = '".$userid."' and follows = false";

			if ($conn->query($sql) === TRUE) {
			    echo "record updated successfully is true";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
}
echo "<br>";
echo "sucess";
$conn->close();
@header("Location:/userprofile.php?uid=".$userid."");
//@header("Location:http://lemonlight.cf/blog.php?page=1");
?>