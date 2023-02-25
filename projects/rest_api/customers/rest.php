<?php
   
   //basic headers

   include('hedget.php');
   include('function.php');
   //request Methods.

   
   $requestMethod = $_SERVER["REQUEST_METHOD"];

   if($requestMethod == "GET"){
      $customer_list=getCustomerList();
    echo $customer_list;
   }
   else{
    $data = [
         'status'=> 405,
         'message' =>  $requestMethod.'  method not allowed',
    ];
    header("HTTP/1.0 405 Method not allowed");
    echo json_encode($data);
   }
?>