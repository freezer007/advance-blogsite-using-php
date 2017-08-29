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
$heading = $_POST["title"];
$brief = $_POST["description"];
$fullblog = $_POST["editor1"];
$imsrc = $_POST["image"];
echo $imsrc;
$gener = $_POST["catagory"];
echo $fullblog;

$sql = "UPDATE blog SET gener = '".$gener."',imsrc = '".$imsrc."',heading = '".$heading."',brief = '".$brief."',fullblog = '".$fullblog."' WHERE id = '".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "sucess";
$conn->close();
@header("Location:/bsingle.php?blogid=".$id."&src=".$imsrc."");
//@header("Location:http://lemonlight.cf/blog.php?page=1");
?>