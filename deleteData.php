<?php
  require_once("connection.php");

  //  $firstName = $_POST['firstName'];
   // $lastName = $_POST['lastName'];
    $id = $_POST['id'];

    $query = "DELETE FROM student where id = {$id}";

    $delete = mysqli_query($connection,$query);

    if($delete) {
        echo "Successfully Deleted" . "<script> document.location.href='list.php';</script>";
    }
    else {
        echo mysqli_error($connection);
    }
