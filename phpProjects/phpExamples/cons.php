<?php

//dbname
//nameofthe server
//username of the server
//password;
$dbname="registerdb";
$severname="localhost";
$passs="";
$usernames="root";
$conn=mysqli_connect($severname,$usernames,$passs,$dbname);
if(!$conn){
    echo mysqli_error($conn);
}

?>