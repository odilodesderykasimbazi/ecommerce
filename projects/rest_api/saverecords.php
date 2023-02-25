
<!-- saverecords.php -->
<?php
$servername = "localhost";
$username ="root";
$dbname ="allphptricks";
$password ="";
$result = 0;

// Establish connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// check connection
if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}

// fetch data form using $post
$fulname = $_POST['fulname'];
$email = $_POST['email'];
echo $fulname;
echo $email;

// Validate wether user has enterd all values
if (!$fulname || !$email) {
	$result = 2;
}elseif (!strpos($email, "@") || !strpos($email, ".")) {
	$result = 3;
}else {

	// sql statment to insert result into Database.
	$sql = "INSERT INTO users (fulname, email) values(?, ?)";

	// prepared statment
	$stmt = $conn->prepare($sql);
	// bind values
	$stmt->bind_param('ss', $fulname, $email);
	// execute the statments
	if ($stmt->execute()) {
		$result =1 ;
	}
}

echo $result;
// close connection
$conn->close();
?>