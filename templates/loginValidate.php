<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maidbookapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$mobile = $_POST['mobile'];
$passwd = $_POST['passwd']; 

// prepare and bind
$stmt = "SELECT * FROM logindetails WHERE mobile=$mobile AND passwd='$passwd'";
$result = $conn->query($stmt);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    header('location:hirePage.php');
  }
} else {
  echo "<center><h2>Mobile Number & Password didn't match..! <br> Please try again :( </h2></center>";
}
$conn->close();

?>