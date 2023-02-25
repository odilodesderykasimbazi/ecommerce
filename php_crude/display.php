<?php
include 'cons.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrudData</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4>Data from the database <a class ="btn btn-primary btn-sm float-end" href="index.php">Add User</a></h4></div>
                    <div class="card-body">
                  <table class="table table-stipped table-bordered">
                    <thead class="bg-warning">
                        <tr>
                            <th>Firs Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Course</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select = "SELECT * FROM crudtb";
                        $quers= mysqli_query($conection,$select);
                        if($quers){
                            while($row=mysqli_fetch_assoc($quers)){
                                $firstname = $row['firstname'];
                                $mname = $row['mname'];
                                $lname = $row['lastname'];
                                $course = $row['course'];
                                echo '<tr>
                                <td>'.$firstname.'</td>
                                <td>'.$mname.'</td>
                                <td>'.$lname.'</td>
                                <td>'.$course.'</td>
                                <td><a class ="btn btn-primary btn-sm w-100" href="edit.php?editid='.$row['id'].'">Edit</a></td>
                                <td><a class ="btn btn-danger btn-sm w-100" href="delete.php?deleid='.$row['id'].'">Delete</a></td>
                                </tr>';
                            }
                        }
                        ?>
                        
                    </tbody>
                  </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>