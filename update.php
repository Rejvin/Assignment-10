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
    $id = $_POST['id'];


    $query = "UPDATE student SET firstName = '{$firstName}', lastName = '{$lastName}', email = '{$email}', phoneNumber = '{$phoneNumber}', date = '{$date}', gender = '{$gender}', address = '{$address}', districtName = '{$districtName}', password = '{$password}' where id = {$id}";

    $update = mysqli_query($connection,$query);

    if($update) {
        echo "Successfully Updated" . "<script> document.location.href='list.php';</script>";
    }
    else {
        echo mysqli_error($connection);
    }
