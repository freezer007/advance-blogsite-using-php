<?php
session_start();
if($_SESSION["per"] != "RWX")
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

$id = $_POST["id"];
$catagory = $_POST["catagory"];

$sql = "UPDATE user SET permission = '".$catagory."' WHERE id = '".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "sucess";
$conn->close();
@header("Location:/../admin.php?page=1&gener=User");
//@header("Location:http://lemonlight.cf/blog.php?page=1");
?>