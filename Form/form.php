<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php  

	$username = $email = $fullname = $password = $submit = "";
	$ERR = array('usernameERR' => "" , 'emailERR' => "", 'fullnameERR' => "", 'passwordERR' => "" );

	if (isset($_POST['submit'])) {
		if (empty($_POST['userName'])) {
			$ERR['usernameERR'] = "*A username is required";
		} else {
			$username = $_POST['userName'];
			if (!preg_match('/^[a-z0-9]/', $username)) {
				$ERR['usernameERR'] = "*Invalid username";
			}
		}

		if (empty($_POST['email'])) {
			$ERR['emailERR'] = "*An email is required";
		} else {
			$email = $_POST['email'];
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$ERR['emailERR'] = "*Invalid email";
			}
		}

		if (empty($_POST['fullName'])) {
			$ERR['fullnameERR'] = "*Your name is required";
		} else {
			$fullname = $_POST['fullName'];
			if (!preg_match('/^[a-zA-Z\s]/', $fullname)) {
				$ERR['fullnameERR'] = "*Invalid name";
			}
		}

		if (empty($_POST['password'])) {
			$ERR['passwordERR'] = "*Password is required";
		} else {
			$password = $_POST['password'];
			if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)) {
				$ERR['passwordERR'] = "*Password must contain letters, capitalized letters, numbers and at least 8 characters long";
			}
		}

		if(array_filter($ERR)) {
			
		} else {
			header('location: welcome.php');
		}
	}

	?>
	<div>
		<h1 class="blueText center">Sign Up</h1>
	</div>
	<div class="center">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div>
				<label>Username</label><br>
				<input class="userName" type="text" name="userName" value="<?php echo htmlspecialchars($username); ?>"><br>
				<span style="color: red"><?php echo htmlspecialchars($ERR['usernameERR']); ?></span>
			</div>
			<div>
				<label>Email</label><br>
				<input class="email" type="mail" name="email" value="<?php echo htmlspecialchars($email); ?>"><br>
				<span style="color: red"><?php echo htmlspecialchars($ERR['emailERR']); ?></span>
			</div>
			<div>
				<label>Full Name</label><br>
				<input class="fullName" type="text" name="fullName" value="<?php echo htmlspecialchars($fullname); ?>"><br>
				<span style="color: red"><?php echo htmlspecialchars($ERR['fullnameERR']); ?></span>
			</div>		
			<div>
				<label>Password</label><br>
				<input class="password" type="password" name="password" value="<?php echo htmlspecialchars($password); ?>"><br>
				<span style="color: red"><?php echo htmlspecialchars($ERR['passwordERR'] ); ?></span>
			</div>
			<div>
				<input class="submit button" type="submit" name="submit">
			</div>
		</form>
	</div>
</body>
</html>