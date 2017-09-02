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


$uname = $_POST["userName"];
$email = $_POST["userEmail"];
$phone = $_POST["userPhone"];
$msg = $_POST["userMsg"];

$sql = "INSERT INTO contact (username, email, mobile, subject)
        VALUES ('".$uname."','".$email."','".$phone."','".$msg."')";

if ($conn->query($sql) === TRUE) {
    echo "record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "sucess";
$conn->close();
@header("Location:/index.php");
//@header("Location:http://lemonlight.cf/blog.php?page=1");
?>