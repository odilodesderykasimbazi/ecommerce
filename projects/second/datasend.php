<?php
include('connections.php');
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
if(!empty($fname) && !empty($lname)){
$sql = "insert into extb(fnames, lnames) values('$fname','$lname')";
$sql_run = mysqli_query($conss,$sql);
if($sql_run){
    //echo "The data inserted to the database";
    $res = [
        'status' => 200,
        'message' => 'The data inserted succesfully'
    ];
    echo json_encode($res);
}else{
    //echo "The data not inserted to the database";
    $res = [
     'status' => 500,
     'message' => 'The data not inserted to the database'
    ];
    echo json_encode($res);
}
}
else{
    //echo "The field are empty";
    $res =[
        'status' =>422,
        'message' => 'The field input are empty'
    ];
    echo json_encode($res);
}


?>