<?php
$conect = mysqli_connect("localhost","root","","dbapi");
if(!$conect){
    die(mysqli_connect_error($conect));
}
$first = $_POST['firstname'];
$second = $_POST['middlename'];
$third = $_POST['lastname'];

if(!empty($first) && !empty($second) && !empty($third)){
 $sql = "insert into dbtb(first_name,m_name,l_name) values('$first','$second','$third')";
 $quer_run = mysqli_query($conect,$sql);
 if($quer_run){
    echo "The data are inserted successfully";
 }else{
    echo "The data are not inserted";
 }
}else{
    echo "The field are empty";
}

?>