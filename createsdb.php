<!DOCTYPE html>
<html>
<body>

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

$sql = "CREATE TABLE follow(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userid INT(6) NOT NULL,
follows boolean DEFAULT true,
followerid INT(8)
)
";

if ($conn->query($sql) === TRUE) {
    echo "Table follow created successfully";
    echo "</br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 

</body>
</html>