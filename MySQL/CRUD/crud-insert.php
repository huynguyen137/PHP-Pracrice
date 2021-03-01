<?php 
	include "crud-connect.php";

	$customer = $_POST['customer'];
	$carName = $_POST['carName'];
	$carYear = $_POST['carYear'];
	$address = $_POST['address'];
	$mail = $_POST['mail'];
	$phone = $_POST['phone'];

	$INSERT = "INSERT INTO Customer(CustomerName, CarName, Year, Address, Email, Phone)
	VALUES ('$customer', '$carName', '$carYear', '$address', '$address', '$mail', '$phone')";

	query($INSERT);

	$conn->close();

	header('location: success-message.php');
 ?>