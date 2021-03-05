<?php 
	if (isset($_POST['delete'])) {
		include 'crud-connect.php';
		$getID = $_POST['id'];

		$DELETE = "DELETE FROM Customer WHERE id = $getID";

		$conn->query($DELETE);

		$conn->close();
	}
 ?>