<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error) {
		die("Connection failed: " .$conn->error);
	} else {
		echo "Connected successfully.";
	}

	

 ?>