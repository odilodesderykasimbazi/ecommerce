<?php

$connection = mysqli_connect('localhost','root','','apidb');
if(!$connection){
    die('connection Error'.mysqli_connect_error($connection));
}
?>