<?php
$cons= mysqli_connect("localhost","root","","ajaxdb");
if(!$cons){
    die(mysqli_connect_error($cons));
}
$first_name = $_POST['firstname'];
$mname= $_POST['mnamess'];
$lastname = $_POST['lastnames'];
// echo $first_name;
// echo $mname;
// echo $lastname;

if(!empty($first_name) && !empty($mname) && !empty($lastname)){
    $sql = "insert into ajaxtb(firstname,midlename,lastname) values('$first_name','$mname','$lastname')";
    $query_run = mysqli_query($cons,$sql);
    if($query_run){
        echo "The data are inserted successfully";
    }
    else{
        echo "The data are not inserted in the database";
    }
    
}else{
    echo "The field input is empty";
}
?>