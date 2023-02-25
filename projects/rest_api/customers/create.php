<?php
error_reporting(0);
include('hedpost.php');

include('function.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod=="POST"){
    //getting the data if not using the form-data
    //means the data are inserted using the raw data;
$inputdata = json_decode(file_get_contents("php://input"),true);
if(empty($inputdata)){//if the data is form-data
    //echo $_POST['name']; //print or show the data being inserted;
    $storeCustomer = storeCustomer($_POST);

}else{
    $storeCustomer = storeCustomer($inputdata);
    // 
}
echo $inputdata;

}
else{
    $data= [
        'status' => 405,
        'message' => $requestMethod.' Method Not Allowed',
    ];
    header("HTTP/1.0 405 Method not allowed");
    echo json_encode($data);
}


?>