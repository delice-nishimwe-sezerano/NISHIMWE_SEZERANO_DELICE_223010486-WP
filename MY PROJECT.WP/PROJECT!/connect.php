<?php
$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$day = $_POST['dayOfBirth'];
$month = $_POST['monthOfBirth'];
$year = $_POST['yearOfBirth'];
$email = $_POST['emailID'];
$mobile = $_POST['mobileNumber'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$city = $_POST['city'];
$pin = $_POST['pinCode'];
$state = $_POST['state'];
$country = $_POST['country'];

$sql = "INSERT INTO students 
(firstName, lastName, dayOfBirth, monthOfBirth, yearOfBirth, emailID, mobileNumber, gender, address, city, pinCode, state, country)
VALUES 
('$firstName','$lastName','$day','$month','$year','$email','$mobile','$gender','$address','$city','$pin','$state','$country')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>