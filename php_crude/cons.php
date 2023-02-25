<?php
$conection = mysqli_connect('localhost','root','','cruedb');
if(!$conection){
    die(mysqli_connect_error($conection));
}

?>