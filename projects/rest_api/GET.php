<html>
<head>
	<title>Api Fetch data</title>
	<style type="text/css">
		table, th, td{
			border: 1px solid black;
		}
		.container {
			width: 50%;
			margin: 0 auto;
		}
		h2{
			text-align: center;
			border-bottom: 2px solid green;
		}
	</style>

</head>
<body class="container">
	<h2>Order Items Form.</h2>
	<form action='' method='POST'>
		<table>
			<tr>
				<td>
		              <label>Enter Order ID:</label>&nbsp;
		              <input type="text" name="order_id" placeholder="Enter Order Id" required><br/>
		          </td>
		     </tr>
		     <tr>
		     	<td>
		     		<button type="submit" name="submit" value="submit">Submit</button><br/>
		     	</td>
		     </tr>
		     </tr>
		 </table>
	</form>
</body>

<?php
if (isset($_POST['order_id']) && $_POST['order_id'] != "") {
	    $order_id = $_POST['order_id'];
	    $url    = "http://localhost/Php/rest/api/".$order_id;
	    $client  = curl_init($url);
	    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
	    $response  = curl_exec($client);
	    $result    = json_decode($response);


	    echo "<table>";
	    echo "<tr><td>Order ID:</td><td>$result->order_id</td></tr>";
	    echo "<tr><td>Amount :</td><td>$result->amount</td></tr>";
	    echo "<tr><td>Response Code:</td><td>$result->response_code</td></tr>";
	    echo "<tr><td>Response Description:</td><td>$result->response_desc</td><tr>";
	    echo "</table>";
}

// get api file.
<?php 
header("Content-Type:application/json");
if (isset($_GET['order_id']) && $_GET['order_id'] != "") {
	 include('dbconn.php');
	 $order_id = $_GET['order_id'];
	 $result  = mysqli_query($conn, "SELECT * FROM `transactions` WHERE order_id=$order_id");

	 if (mysqli_num_rows($result) > 0 ) {
	 	  $row = mysqli_fetch_array($result);
	 	  $amount = $row['amount'];
	 	  $response_code = $row['response_code'];
	 	  $response_desc = $row['response_desc'];
	 	  // call function response
	 	  response($order_id, $amount, $response_code, $response_code);
	 	  // close Database connection
	 	  $conn->close();

	 }else{
	 	response(NULL, NULL, 200, "No Records Found.");
	 }
}else{
	response(NULL, NULL, 400, "Invalid Request");
}

// Define Function 'reponse'
function response($order_id, $amount, $response_code, $response_desc){
	$response['order_id'] = $order_id;
	$response['amount'] = $amount;
	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;

	// Encode to json
	$json_response = json_encode($response);
	echo $json_response;
}