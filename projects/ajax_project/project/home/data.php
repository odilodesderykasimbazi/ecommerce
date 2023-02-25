<?php

$connection = mysqli_connect("localhost","root","","ajaxdb");
if(!$connection){
    die(mysqli_connect_error($connection));
}


// storing the data in variables;

$fname = $_POST['first_name'];
$mname = $_POST['midle_name'];
$lastname = $_POST['last_name'];

if(!empty($fname) && !empty($mname) && !empty($lastname)){
    $sql = "insert into ajaxtb(firstname,midlename,lastname) values('$fname','$mname','$lastname')";
    $query = mysqli_query($connection,$sql);
    if($query){
        echo " The data are inserted into the database";
    }
    else{
        echo "The data are not inserted to the database";
    }
}
else{
    echo "Please fill up the input field";
}

?>