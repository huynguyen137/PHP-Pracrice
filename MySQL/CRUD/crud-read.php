<?php 
	include 'crud-connect.php';

	if(isset($_GET['submit'])) {
		$key = $_GET['phone'];
		$READ = "SELECT * FROM Customer WHERE Phone = $key ";
		$result = $conn->query($READ);

		$print = $result->fetch_assoc();
		$printCUSTOMER = $print["CustomerName"];
		$printCARNAME = $print["CarName"];
		$printCARYEAR = $print["Year"];
		$printADDRESS = $print["Address"];
		$printEMAIL = $print["Email"];
		$printPHONE = $print["Phone"];
	}

	$conn->close();
 ?>