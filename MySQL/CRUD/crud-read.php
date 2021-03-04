<?php 
	include 'crud-connect.php';

	$printCUSTOMER = $printCARNAME= $printCARYEAR= $printADDRESS= $printEMAIL= $printPHONE = "";
	$id= $key="";

	if(isset($_GET['check'])) {
		$key = $_GET['phone'];
		$READ = "SELECT * FROM Customer WHERE Phone = $key ";
		$result = $conn->query($READ);

		$print = $result->fetch_assoc();
		$id = $print["id"];
		$printCUSTOMER = $print["CustomerName"];
		$printCARNAME = $print["CarName"];
		$printCARYEAR = $print["Year"];
		$printADDRESS = $print["Address"];
		$printEMAIL = $print["Email"];
		$printPHONE = $print["Phone"];


	}

	$conn->close();
 ?>