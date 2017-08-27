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

$acomment = $_POST["areply"];
$uname = $_POST["uname"];
$userid = $_POST["usrid"];
$cid = $_POST["cid"];
$blgid = $_POST["bloid"];

$sql = "INSERT INTO reply (uname, userid, reply, commentid)
        VALUES ('".$uname."','".$userid."','".$acomment."','".$cid."')";

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