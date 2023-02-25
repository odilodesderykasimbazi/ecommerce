<?php
$dbname="apidb";
$username="root";
$password="";
$severname="localhost";

$conn= mysqli_connect($severname,$username,$password,$dbname);
if(!$conn){
     die("The connection error". mysqli_connect_error($conn) );

}
?>