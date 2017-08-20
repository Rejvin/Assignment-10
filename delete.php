<?php
    require_once("connection.php");

    $id = $_GET['id'];
	$search_query  = mysqli_query($connection,"SELECT * FROM student where id = {$id}");
	$row = mysqli_fetch_assoc($search_query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/style.css">
</head>
<body>
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h1>Student Registration Form</h1>
                            <nav class="navbar navbar-default">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.php">Registration Form</a></li>
                                    <li><a href="list.php">Student List</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="deleteData.php" method="POST">
                               <!-- <div class="form-group">
                                    <label for="firstName" class="col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?= $row['firstName'] ?>" name="firstName" class="form-control" id="firstName" placeholder="Type your first name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastName" class="col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?= $row['lastName'] ?>" name="lastName" class="form-control" id="lastName" placeholder="Type your last name">
                                    </div>
                                </div> -->
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                              <div class="form-group">
                                    <label class="col-md-5">CLICK FOR FINAL SUBMISSION</label>
                                    <div class="col-md-7">
                                        <input type="submit" name="button" class="btn btn-success" value="DELETE">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>