<?php
$conn = mysqli_connect('localhost','root','','logindb');
if(!$conn){
    die(mysql_error($conn));
}

?>