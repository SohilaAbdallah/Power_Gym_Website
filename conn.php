<?php
	$fullname1 = $_POST['fullname'];
	$age1 = $_POST['age'];
	$number1 = $_POST['number'];
    $address1 = $_POST['address'];
    $branch1 = $_POST['branch'];

	// Database connection Form men
	$conn = new mysqli('localhost','root','','form');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into men(fullname, age, number, address, branch) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("siiss", $fullname1, $age1, $number1, $address1, $branch1);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration-men successfully...";
		$stmt->close();
		$conn->close();
	}
?>