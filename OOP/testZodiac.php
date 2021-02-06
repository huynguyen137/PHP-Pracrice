<!DOCTYPE html>
<html>
<head>
	<title>Test Zodiac</title>
	<link rel="stylesheet" type="text/css" href="../Form/style.css">
</head>
<body>
	<div class="vertical">
		<div class="center">
			<strong><?php include 'zodiac.php'; ?></strong>
		</div>
		<div>
			<div>
				<br><h1 class="blueText center">Zodiac Sign Lookup</h1><br>
			</div>
			<section class="center">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
					<label for="month">Month: </label>
					<input type="number" name="month" min="1" max="12" style="width: 50%;" ><br>
					<label for="day">Day: </label>
					<input type="number" name="day" style="width: 50%;margin-left: 22px;" ><br>
					<input type="submit" name="submit" value="Select" class="button">
				</form>
			</section>
		</div>
	</div>
</body>
</html>