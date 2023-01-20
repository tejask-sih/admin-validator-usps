<?php

if(isset($_POST)){
	$address_array = json_decode($_POST['myData'],true);

	$servername = "localhost";
	$username = "root";
	$password = "Welcome@123";
	$dbname = "address-validator";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$val = array_values($address_array);

	$sql = "INSERT INTO addresses (address_line1,address_line2,city,state,zipcode)
	VALUES ('" . implode("', '", $val) . "')";


		if ($conn->query($sql) === TRUE) {
			$response_array['msg'] = "success";
		} else {
			$response_array['msg']= "error";
		}
		$conn->close();
		echo json_encode($response_array);
		
	}
