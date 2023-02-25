<?php
include("conn.php");

if(isset($_POST['submit'])){
    $usename=$_POST['username'];
    $passwds=$_POST['password'];
if(!empty($usename) && !empty($passwds)){
$all= "select username, password from logintb";
$results=mysqli_query($conn,$all);
if($data=mysqli_fetch_array($results)){
    $usernames=$data['username'];
    $passwords=$data['password'];
    if($usernames==$usename && $passwords==$passwds){
        header('location:second.php');
       }
       else{
           echo " You provided wrong credentials";
       }

}
}
else{
    echo "The field are empty";
}
}

?>