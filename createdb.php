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
adm boolean,
birthdate date,
gender boolean,
description varchar(250),
contry varchar(20),
session varchar(20),
lastsaw timestamp,
permission varchar(3),
following INT(8),
follower INT(8)
)
";

if ($conn->query($sql) === TRUE) {
    echo "Table user created successfully";
    echo "<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE blog(
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
uname VARCHAR(30) NOT NULL,
blogdate timestamp,
gener varchar(20),
heading varchar(50),
brief varchar(100),
fullblog varchar(2000),
likes int(8),
dislike int(8)
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
heading varchar(50),
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
heading varchar(50),
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

$sql = "CREATE TABLE activeuser(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
email VARCHAR(30) NOT NULL,
password varchar(50),
hash varchar(32),
active int(1) DEFAULT '0'
)
";

if ($conn->query($sql) === TRUE) {
    echo "Table active created successfully";
    echo "</br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 

</body>
</html>