<?php

//include the headers file
include('headerss.php');
//getting the data according to the method of the api
//consuming the api.
include('funcs.php');
$requestMethod= $_SERVER["REQUEST_METHOD"];

if($requestMethod== "GET"){
    $requestedList=getRequestedLists();
    echo $requestedList;
}
else{
    $data = [
      'status' => 405,
      'message' => $requestMethod. ' method not Found',
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}



?>