<?php 
	include 'crud-connect.php';

	if (isset($_POST['update'])) {
		if ($_POST['customer'] != $printCUSTOMER || $_POST['carName'] != $printCARNAME || $_POST['carYear'] != $printCARYEAR || $_POST['address'] != $printADDRESS || $_POST['mail'] != $printEMAIL || $_POST['phone'] != $printPHONE) {

			$updateCUSTOMER = $_POST['customer'];
			$updateCARNAME = $_POST['carName'];
			$updateCARYEAR = $_POST['carYear'];
			$updateADDRESS = $_POST['address'];
			$updateEMAIL = $_POST['mail'];
			$updatePHONE = $_POST['phone'];

			$UPDATE = "UPDATE Customer 
					SET CustomerName=$updateCUSTOMER,
						CarName=$updateCARNAME,
						Year=$updateCARYEAR,
						Address=$updateADDRESS,
						Email = $updateEMAIL,
						Phone =$updatePHONE
					WHERE id= $id";

		$conn->query($UPDATE);

		$conn->close();

		header('location: success-message.php');
		}
	}

 ?>