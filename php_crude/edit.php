<?php
include 'cons.php';
$ids = $_GET['editid'];
$data = "SELECT * FROM crudtb WHERE id=$ids";
$mysq_run = mysqli_query($conection, $data);
$row = mysqli_fetch_assoc($mysq_run);
$fname = $row['firstname'];
$mnames = $row['mname'];
$lnames = $row['lastname'];
$course = $row['course'];
if(isset($_POST['insertData'])){
  $firstnames = $_POST['first_name'];
  $middlenames = $_POST['middle_name'];  
  $lastname = $_POST['last_name'];
  $courses = $_POST['course'];
  if(!empty($firstnames) && !empty($middlenames) && !empty($lastname) &&!empty($courses)){
    $ques= "UPDATE crudtb set firstname = '$firstnames',mname='$middlenames',lastname='$lastname',course='$courses' where id=$ids";
    $result = mysqli_query($conection,$ques);
    if($result){
        header('location:display.php');
    }
    else{
        die(mysqli_error($conection));
    }
  }
  echo "The field input are empty";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
</head>
<body>
    <h4>Hellow this is desdery! today we are to look on to  resgister a user to the database. please follow me to all the task</h4>
<div class="container my-5">
        <div class="row justify-content-center">
             <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-warning"><h4>Editing The Profile <a href="display.php" class="btn btn-primary btn-sm float-end">Back</a></h4></div>
                    <div class="card-body">
                    <form method="POST">
                    <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">first name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="<?php echo $fname;?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="middle name" class="col-md-4 col-form-label text-md-end">middle name</label>
                             <div class="col-md-6">
                                <input type="text" class="form-control" name="middle_name" autocomplete="off" value="<?php echo $mnames;?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Last naem" class="col-md-4 col-form-label text-md-end">Last name</label>
                             <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="<?php echo $lnames;?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Course" class="col-md-4 col-form-label text-md-end">Course</label>
                             <div class="col-md-6">
                                <input type="text" class="form-control" name="course" value="<?php echo $course;?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button name="insertData" class="btn btn-primary">
                                   Update
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
             </div>
        </div>
      </div>
</body>
</html>