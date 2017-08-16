<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Create database
$sql = "CREATE DATABASE god";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully <br>";
} else {
    echo "Error creating database: " . $conn->error;
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

$sql = "CREATE TABLE user(
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
uname VARCHAR(30) NOT NULL,
email varchar(50) NOT NULL,
password VARCHAR(15) NOT NULL,
isactive boolean DEFAULT false,
hash varchar(32) DEFAULT 'COMEON',
adm boolean DEFAULT false,
birthdate date,
gender varchar(1),
description varchar(250),
contry varchar(20) DEFAULT 'INDIA',
lastsaw timestamp DEFAULT CURRENT_TIMESTAMP,
permission varchar(3) DEFAULT 'RW-',
following INT(8) DEFAULT 0,
follower INT(8) DEFAULT 0
)
";

if ($conn->query($sql) === TRUE) {
    echo "Table user created successfully";
    echo "<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE follow(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
uname VARCHAR(30) NOT NULL,
email varchar(50) NOT NULL,
followerid INT(8)
)
";

if ($conn->query($sql) === TRUE) {
    echo "Table active created successfully";
    echo "</br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE blog(
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
uname VARCHAR(30) NOT NULL,
blogdate timestamp DEFAULT CURRENT_TIMESTAMP,
gener varchar(20) DEFAULT 'other',
heading varchar(50),
brief varchar(100),
fullblog varchar(2000),
likes int(8) DEFAULT 0,
dislike int(8) DEFAULT 0
)
";

if ($conn->query($sql) === TRUE) {
    echo "Table blog created successfully";
    echo "</br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE comment(
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
uname VARCHAR(30) NOT NULL,
userid INT(6),
comment varchar(100),
commentdate timestamp
)
";

if ($conn->query($sql) === TRUE) {
    echo "Table comment created successfully";
    echo "</br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE reply(
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
uname VARCHAR(30) NOT NULL,
userid INT(6),
reply varchar(100),
commentid int(3)
)
";

if ($conn->query($sql) === TRUE) {
    echo "Table reply created successfully";
    echo "</br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 

</body>
</html>