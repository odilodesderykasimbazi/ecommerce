<?php
include 'cons.php';
if(isset($_GET['deleid'])){
    $id = $_GET['deleid'];

    if(!empty($id)){
        $sql = "DELETE FROM crudtb where id = '$id'";
        $quer_run = mysqli_query($conection, $sql);
        if($quer_run){
            header('location:display.php');
        }
        else{
            die(mysqli_error($conection));
        }
    }
}

?>