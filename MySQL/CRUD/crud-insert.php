<?php 
	include "crud-connect.php";

	$INSERT = "INSERT INTO Customer(CustomerName, CarName, Year, Address, Email, Phone)
	VALUES (?, ?, ?, ?, ?, ?)";

	$stmt= $conn->prepare($INSERT);
	$stmt->bind_param("ssissi", $insertCUSTOMER, $insertCARNAME, $insertCARYEAR, $insertADDRESS, $insertEMAIL, $insertPHONE);

	$insertCUSTOMER = $_POST['customer'];
	$insertCARNAME = $_POST['carName'];
	$insertCARYEAR = $_POST['carYear'];
	$insertADDRESS = $_POST['address'];
	$insertEMAIL = $_POST['mail'];
	$insertPHONE = $_POST['phone'];
	$stmt->execute();

	$stmt->close();
	$conn->close();

 ?>