<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// sql to create table
	// $sql = "CREATE TABLE MyGuests (
	// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	// firstname VARCHAR(30) NOT NULL,
	// lastname VARCHAR(30) NOT NULL,
	// email VARCHAR(50),
	// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	// )";

	// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
	// VALUES ('Huy', 'Nguyen', 'huy123@gmail.com')";

	// if ($conn->query($sql) === TRUE) {
	//   echo "New record inserted successfully";
	// } else {
	//   echo "Error : " .$sql. "<br>" .$conn->error;
	// }


	$conn->close();
?>