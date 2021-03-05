<?php 
	if (isset($_POST['update'])) {
		include 'crud-connect.php';
		$getID = $_POST['id'];
		$FETCH = "SELECT * FROM Customer WHERE id = $getID ";
		$result = $conn->query($FETCH);
		$checking = $result->fetch_assoc();

		if ($_POST['customer'] != $checking['CustomerName'] || $_POST['carName'] != $checking['CarName'] || $_POST['carYear'] != $checking['Year'] || $_POST['address'] != $checking['Address'] || $_POST['mail'] != $checking['Email'] || $_POST['phone'] != $checking['Phone']) {

			$updateCUSTOMER = $_POST['customer'];
			$updateCARNAME = $_POST['carName'];
			$updateCARYEAR = $_POST['carYear'];
			$updateADDRESS = $_POST['address'];
			$updateEMAIL = $_POST['mail'];
			$updatePHONE = $_POST['phone'];

			$UPDATE = "UPDATE Customer 
					SET CustomerName='$updateCUSTOMER',
						CarName='$updateCARNAME',
						Year='$updateCARYEAR',
						Address='$updateADDRESS',
						Email = '$updateEMAIL',
						Phone ='$updatePHONE'
					WHERE id= $getID";

			$conn->query($UPDATE);

			$conn->close();

			header('location: success-message.php');
		}
	}
?>