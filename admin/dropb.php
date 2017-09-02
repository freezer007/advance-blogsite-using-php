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


$id = $_GET["blogid"];

$sql = "DELETE from blog where id = '".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "sucess";
$conn->close();
@header("Location:/../admin.php?page=1&gener=Blog");
//@header("Location:http://lemonlight.cf/blog.php?page=1");
?>