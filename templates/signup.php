<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maidbookapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$mobile = $_POST['mobile'];
$passwd = $_POST['passwd']; 

// prepare and bind
$stmt = $conn->prepare("INSERT INTO logindetails (firstname, lastname, mobile, passwd) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $firstname, $lastname, $mobile, $passwd);
$stmt->execute();

header('location:loginPage.php');
// echo "New records created successfully";

?>