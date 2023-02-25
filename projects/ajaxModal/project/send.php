<?php
include('conect.php');

//if(isset($_POST['save_student'])){
$fname = $_POST['first_name'];
$mname = $_POST['middle_name'];
$lastname = $_POST['last_name'];
$course = $_POST['course'];
if(!empty($fname) && !empty($mname) && !empty($lastname) && !empty($course)){
    $insert = "INSERT INTO crudtb(firstname,mname,lastname,course) VALUES('$fname','$mname','$lastname','$course')";
    $result= mysqli_query($cons,$insert);
    if($result){
        // $res = [
        //      'status' => 200,
        //      'message' => 'The data are inserted succsfully'
        // ];
        // echo json_encode($res);
        echo "Data inserted succeful";
    }
    else{
        // $res =[
        //     'status' => 422,
        //      'message' => 'All field are required'
        // ];
        // echo json_encode($res);
        echo "Data not inserted";
    }
}




?>