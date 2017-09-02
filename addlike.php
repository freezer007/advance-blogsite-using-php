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

$uid = $_GET["uid"];
$blogid = $_GET["blogid"];

$sql = "SELECT * FROM likes where bloggerid = '".$_SESSION["id"]."' and blogid = '".$blogid."'";
$result = $conn->query($sql) or die($conn->error);
$ans = $result->num_rows;
echo $ans;
if($result->num_rows == 0){
$sql = "INSERT INTO likes (bloggerid, blogid, choise)
        VALUES ('".$_SESSION["id"]."','".$blogid."',true)";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
}
else{
	$sql = "SELECT * FROM likes where bloggerid = '".$_SESSION["id"]."' and blogid = '".$blogid."' and choise = true";
	$result = $conn->query($sql) or die($conn->error);
	$ans = $result->num_rows;
	echo $ans;
	echo "<br>";
	if($result->num_rows != 0){
	$sql = "UPDATE likes SET choise = false where bloggerid = '".$_SESSION["id"]."' and blogid = '".$blogid."' and choise = true";

			if ($conn->query($sql) === TRUE) {
			    echo "record updated successfully is false";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	else{
	$sql = "UPDATE likes SET choise = true where bloggerid = '".$_SESSION["id"]."' and blogid = '".$blogid."' and choise = false";

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
@header("Location:/bsingle.php?blogid=".$blogid."");
//@header("Location:http://lemonlight.cf/blog.php?page=1");
?>