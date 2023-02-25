<?php
include('connections.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>



    <title>ajaxCrude</title>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="addStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Student Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="dataCollection" method="POST">
                    <div class="modal-body">
                        <!-- Form inputs -->
                        <div class="alert alert-warning d-none" id="errorMessage"></div>
                        <div class="mb-3">
                            <label for="Firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" autocomplete="off" name="firstname" id="firstname">
                        </div>
                        <div class="mb-3">
                            <label for="Middlename" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" autocomplete="off" name="middlename"
                                id="middlename">
                        </div>
                        <div class="mb-3">
                            <label for="Lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" autocomplete="off" name="lastname" id="lastname">
                        </div>
                        <div class="mb-3">
                            <label for="Middlename" class="form-label">course</label>
                            <input type="text" class="form-control" autocomplete="off" name="course" id="course">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="saveStudent" class="btn btn-primary">Save student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Student Modal -->
    <div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="updateStudent">
                    <div class="modal-body">
                        <!-- Form inputs -->
                        <div class="alert alert-warning d-none" id="errorMessageupdate"></div>
                        <input type="hidden" class="form-control" name="student_id" id="student_id">
                        <div class="mb-3">
                            <label for="Firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" autocomplete="off" name="first_name"
                                id="first_name">
                        </div>
                        <div class="mb-3">
                            <label for="Middlename" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" autocomplete="off" name="middle_name"
                                id="middle_name">
                        </div>
                        <div class="mb-3">
                            <label for="Lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" autocomplete="off" name="last_name" id="last_name">
                        </div>
                        <div class="mb-3">
                            <label for="Middlename" class="form-label">course</label>
                            <input type="text" class="form-control" autocomplete="off" name="course_name"
                                id="course_name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="editStudents" class="btn btn-primary">Update student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ajax Crude Operation
                            <button type="submit" class="btn btn-primary float-end" data-bs-toggle="modal"
                                data-bs-target="#addStudent">
                                add student
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="myTable">
                            <thead>
                                <tr>
                                    <th>First name</th>
                                    <th>Middle name</th>
                                    <th>Last name</th>
                                    <th>Course</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                  $data = "SELECT * FROM crudtb";
                                  $data_run =mysqli_query($cons,$data);
                                  if(mysqli_num_rows($data_run) > 0){
                                    foreach($data_run as $datas){
                                    ?>
                                <tr>
                                    <td><?=$datas['firstname']?></td>
                                    <td><?=$datas['mname']?></td>
                                    <td><?=$datas['lastname']?></td>
                                    <td><?=$datas['course']?></td>
                                    <td> <button type="button" value="<?=$datas['id'];?>"
                                            class="editStudent btn btn-primary w-100">Edit</button> </td>
                                    <td><button type="button" value="<?=$datas['id'];?>"
                                            class="deleteStudent btn btn-danger w-100">Delete</button></td>
                                </tr>
                                <?php
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
    <!-- Jquery Cdn Link -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script src="./datas.js"></script>
</body>

</html>