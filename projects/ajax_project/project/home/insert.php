<?php
 $connection = mysqli_connect("localhost","root","","ajaxcrude");
 if(!$connection){
    die(mysqli_connect_error($connection));
 }
 $fname= $_POST['first_name'];
 $midname = $_POST['middle_name'];
 if(!empty($fname) && !empty($midname)){
    $sql= "INSERT INTO  crud_tb (`firstname`,`lastname`) VALUES ('$fname','$midname')";
    $query_run = mysqli_query($connection,$sql);
   if($query_run){
    echo "The data are inserted successfully to the database";
   }else{
    echo " The data are not inserted to the database";
   }
 }
 else{
    echo "The field input are empty";
 }



?>