<?php
	$fullname = $_POST['fullname'];
	$age = $_POST['age'];
	$number = $_POST['number'];
    $address = $_POST['address'];
    $branch = $_POST['branch'];

	// Database connection Form Ladies
	$conn = new mysqli('localhost','root','','registration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Register(fullname, age, number, address, branch) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("siiss", $fullname, $age, $number, $address, $branch);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration-ladies successfully...";
		$stmt->close();
		$conn->close();
	}
?>