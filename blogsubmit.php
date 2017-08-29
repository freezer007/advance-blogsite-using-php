<?php
session_start();
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

$heading = $_POST["title"];
$brief = $_POST["description"];
$fullblog = $_POST["editor1"];
$imsrc = $_POST["image"];
$gener = $_POST["catagory"];
echo $fullblog;
$sql = "SELECT uname FROM user WHERE id ='".$_SESSION["id"]."'";
$result = $conn->query($sql) or die($conn->error);
while($row = $result->fetch_assoc()) {
	       $name = $row["uname"];
	}
$sql = "INSERT INTO blog (uname, userid, gener, imsrc, heading ,brief ,fullblog)
        VALUES ('".$name."','".$_SESSION["id"]."','".$gener."','".$imsrc."','".$heading."','".$brief."','".$fullblog."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "sucess";
$conn->close();
@header("Location:/blog.php?page=1&gener=".$gener."");
//@header("Location:http://lemonlight.cf/blog.php?page=1");
?>