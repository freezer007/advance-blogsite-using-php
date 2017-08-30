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

$id = $_SESSION["id"];
$uname = $_POST["title"];
$description = $_POST["editor1"];
$imsrc = $_POST["image"];
$gender = $_POST["catagory"];

$sql = "UPDATE user SET gender = '".$gender."',imsrc = '".$imsrc."',uname = '".$uname."',description = '".$description."' WHERE id = '".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "UPDATE blog SET uname = '".$uname."' WHERE userid = '".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "UPDATE comment SET uname = '".$uname."' WHERE userid = '".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "UPDATE reply SET uname = '".$uname."' WHERE userid = '".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "sucess";
$conn->close();
@header("Location:/profile.php");
//@header("Location:http://lemonlight.cf/blog.php?page=1");
?>