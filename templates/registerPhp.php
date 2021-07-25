<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maidbookapp";
$conn = new mysqli($servername, $username, $password, $dbname);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$marital = $_POST['marital'];
$religion = $_POST['religion'];
$exp = $_POST['exp'];
$salary = $_POST['salary'];
$workingHrs = $_POST['workingHrs'];
$lang = $_POST['lang'];
$home = $_POST['home'];
$street = $_POST['street'];
$area = $_POST['area'];
$city = $_POST['city'];
$states = $_POST['states'];
$zip = $_POST['zip'];

$intrstd =$_POST['intrested'];
$terms = $_POST['terms'];

// prepare and bind
$stmt = $conn->prepare("INSERT INTO registered (fname, lname, home, street, area, city, states, zipcode, mobile, age, marital, religion, experience, gender, salary, working, languages) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?)");
$stmt->bind_param("sssssssssssssssss", $fname, $lname, $home, $street, $area, $city, $states, $zip, $mobile, $age, $marital, $religion, $exp, $gender, $salary, $workingHrs, $lang);
$stmt->execute();

header('location:index.php');
?>