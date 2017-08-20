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
                            <form class="form-horizontal" action="add.php" method="POST">
                                <div class="form-group">
                                    <label for="firstName" class="col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Type your first name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastName" class="col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Type your last name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label class="col-md-3" for="email">Email Address</label>
                                   <div class="col-md-9">
                                       <input type="email" class="form-control" name="email" id="email" placeholder="Type your email address" required>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-3" for="phoneNumber">Phone Number</label>
                                   <div class="col-md-9">
                                       <input type="number" class="form-control" name="phoneNumber" id="phoneNumber" min="0" placeholder="Type your phone number" required>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-3" for="date">Date of Birth</label>
                                   <div class="col-md-9">
                                       <input type="date" class="form-control" name="date" id="date" required>
                                   </div>
                               </div>
                               <div class="form-group">
                                  <label class="col-md-3">Select Gender</label>
                                   <label class="col-md-2"><input type="radio" value="female" name="gender"> Female</label>
                                   <label class="col-md-2"><input type="radio" value="male" name="gender"> Male</label>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-3" for="image">Image</label>
                                   <div class="col-md-9">
                                       <input type="file" class="form-control" name="image" id="image" accept="image/*" multiple required>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-3" for="address">Address</label>
                                   <div class="col-md-9">
                                       <textarea name="address" id="address" class="form-control" cols="30" rows="10" style="resize:vertical;"></textarea>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-3" for="districtName">District Name</label>
                                   <div class="col-md-9">
                                       <select name="districtName" class="form-control" id="districtName" required>
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
                                       <input type="password" class="form-control" name="password" id="password" required>
                                   </div>
                               </div>
                              <!-- <div class="form-group">
                                   <label class="col-md-3">I agree all these terms</label>
                                   <div class="col-md-9">
                                       <input type="checkbox" name="check" class="form-control" value="check" required>
                                   </div>
                               </div> -->
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