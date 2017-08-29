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

$acomment = $_POST["acomment"];
$uname = $_POST["uname"];
$userid = $_SESSION["id"];
$blgid = $_POST["blgid"];

$sql = "INSERT INTO comment (uname, userid, blogid, comment)
        VALUES ('".$uname."','".$userid."','".$blgid."','".$acomment."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "sucess";
$conn->close();
@header("Location:/bsingle.php?blogid=".$blgid."");
//@header("Location:http://lemonlight.cf/blog.php?page=1");
?>