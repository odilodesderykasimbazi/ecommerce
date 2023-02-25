<?php
$conn= new mysqli('localhost','root','');


//checking for connection

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
else{
    echo "successfull connected";
    echo '<br>';
}
//Now Database creation.

$sql= "CREATE DATABASE Logindatabase";
if($conn->query($sql)===true){
    echo "The database is created succesfully";
}
else{
    echo "The database is not created".$conn->error;
}
$conn->close();
?>