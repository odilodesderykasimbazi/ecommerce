<?php
include('connections.php');

// Deleting student Records from the database;
if(isset($_POST['students_id'])){
    $deleted_id = mysqli_real_escape_string($cons, $_POST['student_id']);
    if(!empty($deleted_id)){
        $sql_delete = "DELETE FROM crudtb WHERE id = '$deleted_id'";
        $sqli_delete_run = mysqli_query($cons,$sql_delete);
        if($sqli_delete_run){
            $res = [
                'status' => 200,
                'message' => 'The record deleted successfully'
            ];
            echo json_encode($res);
            return false;
        }
        else {
            $res = [
                'status' => 500,
                'message' => 'The record not deleted'
            ];
            echo json_encode($res);
            return false;
        }
    }
}

// Getting an id from the database.
if(isset($_GET['stude_id'])){
    $student_id = mysqli_real_escape_string($cons,$_GET['stude_id']);
    $sql = "SELECT * FROM crudtb WHERE id = $student_id";
    $sql_run = mysqli_query($cons, $sql);
    if(mysqli_num_rows($sql_run)== 1){

        $student = mysqli_fetch_array($sql_run);
        $res = [
            'status' => 200,
            'message' => 'The student fetched successfully',
            'data' => $student
        ];
        echo json_encode($res);
       return false;
    }
    else{
        $res = [
            'status' => 404,
            'message' => 'The data not retrieved from the database'
        ];
        echo json_encode($res);
        return false;
    }
}

// Udating the records of the student;
if(isset($_POST['update_student'])){
    $students_id = mysqli_real_escape_string($cons, $_POST['student_id']);
    $firstnames =  mysqli_real_escape_string($cons, $_POST['first_name']);
    $mnames     =  mysqli_real_escape_string($cons, $_POST['middle_name']);
    $lnames     =  mysqli_real_escape_string($cons, $_POST['last_name']);
    $courses    =  mysqli_real_escape_string($cons, $_POST['course_name']);
    if($students_id == NULL || $firstnames == NULL || $mnames== NULL || $lnames == NULL || $courses== NULL){
        $res = [
            'status' => 422,
            'message' => 'The field input are mandotory'
        ];
        echo json_encode($res);
        return false;
    }
    $updte = "UPDATE crudtb SET firstname = '$firstnames', 
    mname = '$mnames', lastname='$lnames',course='$courses' WHERE id = '$students_id'";
    $updte_run = mysqli_query($cons, $updte);
    if($updte_run){
        $res = [
            'status' => 200,
            'message' => 'The student is updated succssfully'
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status'=> 500,
            'message' => 'The student not updated'
        ];
        echo json_encode($res);
        return false;
    }
}
// Inserting to the database data;
$fname = $_POST['firstname'];
$mname = $_POST['middlename'];
$lname = $_POST['lastname'];
$course = $_POST['course'];
if(!empty($fname) && !empty($mname) && !empty($lname) && !empty($course)){
  $sql = "INSERT INTO crudtb(firstname,mname,lastname,course) VALUES ('$fname','$mname','$lname','$course')";
  $sql_run = mysqli_query($cons,$sql);
  if($sql_run){
    $res = [
        'status' => 200,
        'message' => 'The data are inserted to the database'
    ];
    echo json_encode($res);
  }
  else{
    $res = [
        'status' => 500,
        'message' => 'data not inserted in the database'
    ];
    echo json_encode($res);
  }
}
else{
    $res = [
        'status' => 422,
        'message' => 'The field input are empty'
    ];
    echo json_encode($res);
    return false;
}


?>