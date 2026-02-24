<?php
include "connect.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$service_type = $_POST['service_type'];
$booking_date = $_POST['booking_date'];
$booking_time = $_POST['booking_time'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO reservations 
(first_name, last_name, address, gender, age, service_type, booking_date, booking_time, email, phone)
VALUES 
('$first_name', '$last_name', '$address', '$gender', '$age', '$service_type', '$booking_date', '$booking_time', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Reservation successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>