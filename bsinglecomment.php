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

$sql = "SELECT * FROM user WHERE id='".$_SESSION["id"]."'";

		$result = $conn->query($sql) or die($conn->error);
						while($row = $result->fetch_assoc()) {
				        $uname = $row["uname"];
				    	}
$acomment = $_POST["acomment"];
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