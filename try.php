
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
echo "0 results";

?> 
<?php 
if($_SESSION["eml"] == ""){

}
?>

</body>
</html>
<?php echo $hidden>
pika girl in poke world