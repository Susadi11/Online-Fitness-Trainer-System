<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['firstname'];
$mobile = $_POST['mobilenumber'];
$email = $_POST['Email'];
$country = $_POST['country'];
$cmt = $_POST['cmt'];

// Prepare and execute the SQL INSERT statement
$stmt = $conn->prepare("INSERT INTO booking (`name`, `mobileNO`, `email`, `country`, `cmt`) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssiss", $name, $mobile, $email, $country, $cmt);
$stmt->execute();

if ($stmt->error) {
    echo "Error: " . $stmt->error;
} else {
    echo "Data inserted successfully!";
    
    echo"<a href =index.php>"."<button> Go Back</button></a>";
}

$stmt->close();
$conn->close();


?>