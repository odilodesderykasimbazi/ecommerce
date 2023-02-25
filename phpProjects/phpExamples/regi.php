<?php
include('cons.php');

if(isset($_POST['submit']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $passwordd=$_POST['passwod'];
    if(!empty($firstname) && !empty($lastname) && !empty($username) && !empty($passwordd)){
      $insert = "insert into regtb(firstname,lastname,username,password) 
      values('$firstname','$lastname','$username','$passwordd')";
      $quy=mysqli_query($conn,$insert);
      if($quy){
        echo "The data are inserted successfuly";
      }
      else{
        echo "The data are not  inserted";
      }
    }
    else{
      echo "The field are empty";
    }
  
 
  

}

?>