<!DOCTYPE html>
<html>
<body>

<?php
function submit() {
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
echo $fullblog;

$sql = "INSERT INTO blog (uname, imsrc, heading ,brief ,fullblog)
        VALUES ('Admin','".$imsrc."','".$heading."','".$brief."','".$fullblog."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "sucess";
$conn->close();
}
?>

</body>
</html>