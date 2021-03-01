<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed : " .$conn->connect_error);
	}

	$table = "INSERT INTO MyGuests(firstname, lastname, email)
	VALUES ('Bernd', 'Leno', 'leno@gmail.com')";
	// $table = "INSERT INTO MyGuests(firstname, lastname, email)
	// VALUES ('Bukayo', 'Saka', 'saka@gmail.com')";
	// $table = "INSERT INTO MyGuests(firstname, lastname, email)
	// VALUES ('Kieran', 'Tierney', 'kt3@gmail.com')";

	$conn->query($table);

	$read = "SELECT * FROM MyGuests";
	$print = $conn->query($read);

	if ($print->num_rows > 0) {
		echo "<table><tr><th>ID</th><th>Firstname</th><th>Last Name</th><th>Email</th><th>Reg_Date</th></tr>";
		while ($row = $print->fetch_assoc()) {
			echo "<tr><td>" .$row['id']. "</td><td>" .$row['firstname']. "</td><td>".$row['lastname']. "</td><td>".$row['email']. "</td><td>" .$row['reg_date']. "</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results.";
	}

	$del = "DELETE FROM MyGuests WHERE firstname='Kieran'";
	$conn->query($del);

	$conn->close();
 ?>