
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
$sql = "CREATE DATABASE payment";
if ($conn->query($sql) === TRUE) {
   
} else {
   
}
$conn->close();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payment";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to create table users
$sql = "CREATE TABLE paymentdetails(
 
name VARCHAR(50) NOT NULL,
contact  VARCHAR(20) NOT NULL,
email varchar(20) NOT NULL,
rollnum varchar(20) NOT NULL,

college varchar(60) NOT NULL,
year varchar(40) NOT NULL,
event varchar(20) NOT NULL,
coupon varchar(40) NOT NULL

)";
if ($conn->query($sql) === TRUE) {
   
} else {
  
}
mysqli_close($conn);
?>
