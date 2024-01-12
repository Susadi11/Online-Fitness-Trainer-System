<?php/*
$serverName="localhost";
$dbUsername="dilum12";
$dbPassword=" ";
$dbname="fitness trainer login";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbname);

if(!$conn){
    die("connection failed : ".mysqli_connect_error());  
}
*/?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="fitness trainer login";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>