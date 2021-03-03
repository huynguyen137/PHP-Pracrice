<?php 
	include 'crud-connect.php';

	if (isset($_POST['done'])) {
		$updateCUSTOMER = $_POST['customer'];
		$updateCARNAME = $_POST['carName'];
		$updateCARYEAR = $_POST['carYear'];
		$updateADDRESS = $_POST['address'];
		$updateEMAIL = $_POST['email'];
		$updatePHONE = $_POST['phone'];

		$UPDATE = "UPDATE Customer 
		SET Customer=$updateCUSTOMER,
			CarName=$updateCARNAME,
			CarYear=$updateCARYEAR,
			Address=$updateADDRESS,
			Email = $updateEMAIL,
			Phone =$updatePHONE
		WHERE Phone = $key";

		$conn->query($UPDATE);

		$conn->close();
	}
 ?>