<?php 
    require_once("connection.php");

    $get_query = mysqli_query($connection,"SELECT * FROM student");

    $students = [];

    while ($row = mysqli_fetch_assoc($get_query)) {
        $students[] = $row;
    }
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
                            <table class="table table-bordered table-hover">
                                <div class="table-responsive">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Edit Info</th>
                                            <th>Delete Info</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($students as $value) : ?>
                                        <tr>
                                            <td><?= $value['id']; ?></td>
                                            <td><?= $value['firstName']; ?></td>
                                            <td><?= $value['lastName']; ?></td>
                                            <td><a href="edit.php?id=<?= $value['id']; ?>"class="btn btn-sm btn-warning">EDIT</a></td>
                                            <td><a onClick="return confirm('Do you want to Delete this student?');" href="delete.php?id=<?= $value['id']; ?>"class="btn btn-sm btn-danger">DELETE</a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>