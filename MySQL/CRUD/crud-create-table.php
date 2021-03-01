<?php 
	include 'crud-connect.php';

	$TABLE = "CREATE TABLE Customer(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	CustomerName VARCHAR(30) NOT NULL,
	CarName VARCHAR(30) NOT NULL,
	Year INT UNSIGNED NOT NULL,
	Address VARCHAR(50) NOT NULL,
	Email VARCHAR(50) NOT NULL,
	Phone INT
	)";

	query($TABLE);

	$conn->close();
 ?>