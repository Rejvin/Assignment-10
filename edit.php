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
                            <form class="form-horizontal" action="update.php" method="POST">
                                <div class="form-group">
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
                                </div>
                                <div class="form-group">
                                   <label class="col-md-3" for="email">Email Address</label>
                                   <div class="col-md-9">
                                       <input type="email" value="<?= $row['email'] ?>" class="form-control" name="email" id="email" placeholder="Type your email address" required>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-3" for="phoneNumber">Phone Number</label>
                                   <div class="col-md-9">
                                       <input type="number" value="<?= $row['phoneNumber'] ?>" class="form-control" name="phoneNumber" id="phoneNumber" min="0" placeholder="Type your phone number" required>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-3" for="date">Date of Birth</label>
                                   <div class="col-md-9">
                                       <input type="date" value="<?= $row['date'] ?>" class="form-control" name="date" id="date" required>
                                   </div>
                               </div>
                               <div class="form-group">
                                  <label class="col-md-3">Select Gender</label>
                                   <label class="col-md-2"><input type="radio" value="<?= $row['female'] ?>" name="gender"> Female</label>
                                   <label class="col-md-2"><input type="radio" value="<?= $row['male'] ?>" name="gender"> Male</label>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-3" for="image">Image</label>
                                   <div class="col-md-9">
                                       <input type="file" value="<?= $row['image'] ?>" class="form-control" name="image" id="image" accept="image/*" multiple required>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-3" for="address">Address</label>
                                   <div class="col-md-9">
                                       <textarea name="address" value="<?= $row['address'] ?>" id="address" class="form-control" cols="30" rows="10" style="resize:vertical;"></textarea>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-3" for="districtName">District Name</label>
                                   <div class="col-md-9">
                                       <select name="districtName" value="<?= $row['districtName'] ?>" class="form-control" id="districtName" required>
                                           <option value="">Type your district name</option>
                                           <option value="">Bogra</option>
                                           <option value="">Dhaka</option>
                                           <option value="">Sylhet</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-3" for="password">Password</label>
                                   <div class="col-md-9">
                                       <input type="password" value="<?= $row['password'] ?>" class="form-control" name="password" id="password" required>
                                   </div>
                               </div>
                              <!-- <div class="form-group">
                                   <label class="col-md-3">I agree all these terms</label>
                                   <div class="col-md-9">
                                       <input type="checkbox" name="check" class="form-control" value="check" required>
                                   </div>
                               </div> -->
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <div class="form-group">
                                    <label class="col-md-3">Submit Here</label>
                                    <div class="col-md-9">
                                        <input type="submit" name="button" class="btn btn-success" value="SUBMIT">
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