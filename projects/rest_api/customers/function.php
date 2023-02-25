<?php
require '../bdconnection/conn.php';


function error422($message){
    $data=[
      'status' => 422,
      'message' => $message,
    ];
    header("HTTP/1.0 422 Unprocessable entity");
    echo json_encode($data); 
    exit();
}
function storeCustomer($customerInput){
  global $conn;
  $names=mysqli_real_escape_string($conn,$customerInput['name']);
  $lastname=mysqli_real_escape_string($conn,$customerInput['lastname']);
  $email=mysqli_real_escape_string($conn,$customerInput['email']);

  if(empty(trim($names))){
   return error422("Enter your name");
  }elseif(empty(trim($lastname))){
    return error422("Enter your lastname");
  }elseif(empty(trim($email))){
    return error422("Enter your email");
  }
  else{
    $query = "INSERT INTO apitb(name,lastname,email) VALUES('$names','$lastname','$email')";
    $query_run= mysqli_query($conn,$query);
    if($query_run){
      $data = [
        'status'=> 201,
        'message'=> 'data inserted successfully',
   ];
   header("HTTP/1.0 201 success");
  echo json_encode($data);
    }
    else{
      $data = [
        'status'=> 500,
        'message'=> 'Internal Server Error',
   ];
   header("HTTP/1.0 500 Internal Server Error");
   return json_encode($data);
    }
  }
}


function getCustomerList(){

    global $conn;
    $quers= "SELECT * FROM apitb";
    $quer_run=mysqli_query($conn,$quers);

    if($quer_run){
      if(mysqli_num_rows($quer_run) > 0){
       $ress = mysqli_fetch_all($quer_run,MYSQLI_ASSOC);
       $data = [
        'status' => 200,
        'message' => 'Cusotmer List Fetched Successfully',
        'data' => $ress,
   ];
   header("HTTP/1.0 200 OK");
   return json_encode($data);
      }
      else{
        $data = [
            'status'=> 404,
            'message'=> 'No customer Found',
       ];
       header("HTTP/1.0 404 No customer Found");
       return json_encode($data);
      }
    }
    else{
        $data = [
            'status'=> 500,
            'message'=> 'Internal Server Error',
       ];
       header("HTTP/1.0 500 Internal Server Error");
       return json_encode($data);
    }
}



?>