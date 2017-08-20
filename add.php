<?php 
    require_once("connection.php");

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$phoneNumber = $_POST['phoneNumber'];
	$date = $_POST['date'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$districtName = $_POST['districtName'];
	$password = $_POST['password'];


$query = "INSERT INTO student(firstName,lastName,email,phoneNumber,date,gender,address,districtName,password) values('{$firstName}','{$lastName}','{$email}','{$phoneNumber}','{$date}','{$gender}','{$address}','{$districtName}','{$password}')";

$insert = mysqli_query($connection,$query);
if($insert){
    echo "Successfully data added" . "<script> document.location.href='list.php';</script>";
}
else {
    echo "Something went to wrong!";
}