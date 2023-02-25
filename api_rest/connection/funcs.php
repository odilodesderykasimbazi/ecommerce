<?php
include('connection.php');

function getRequestedLists(){
    global $connection;
    $quer = "SELECT * FROM apitb";
    $quer_run=mysqli_query($connection,$quer);

    if($quer_run){
          if(mysqli_num_rows($quer_run) > 0){
             $res=mysqli_fetch_all($quer_run,MYSQLI_ASSOC);
             $data = [
                  'status' => 200,
                  'message' => 'customer list fetched successfully',
                  'data' => $res
             ];
             header("HTTP/1.0 200 ok");
             return json_encode($data);
          }
          else{
            $data = [
                'status' => 405,
                'message' => 'No Customer Found',
             ];
             header("HTTP/1.0 405 No custumer found");
             return json_encode($data);
          }
    }else{
        $data = [
           'status' => 500,
           'message' => 'Internal Server Error',
        ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
        
    }
}
?>