<?php
include("cons.php");


if(isset($_POST['insertData'])){
     $fnames = $_POST['first_name'];
    $mnames = $_POST['middle_name'];
    $lnames = $_POST['last_name'];
     $course = $_POST['course'];

    
    if(!empty($fnames) && !empty($mnames) && !empty($lnames) && !empty($course)){
        $sql = "INSERT INTO crudtb(firstname,mname,lastname,course) VALUES('$fnames','$mnames','$lnames','$course')";
        $query_run = mysqli_query($conection,$sql);
         if($query_run){
           header('location:display.php');
         }
         else{
             echo "The data not inserted in the database";
         }
    }
     else{
         echo "The field are empty";
     }

 }
 else{
    echo "The data not set";
}

?>