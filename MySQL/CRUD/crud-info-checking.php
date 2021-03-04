<!DOCTYPE html>
<html>
<head>
	<title>Kiểm tra và cập nhật thông tin</title>
	<link rel="stylesheet" type="text/css" href="../../Form/style.css">
</head>
<body>
	<?php 
		include 'crud-read.php';
		include 'crud-update.php'
	 ?>
	<div>
		<form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div>
				<label>Nhập số điện thoại của bạn </label>
				<input type="number" name="phone">
			</div>
			<div>
				<input type="submit" name="check" value="Kiểm tra">
			</div>
		</form>
	</div>
	<div>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div>
				<label>Họ và tên </label>
				<input type="text" name="customer" value="<?php echo $printCUSTOMER; ?>">
			</div>
			<div>
				<label>Tên xe </label>
				<input type="text" name="carName" value="<?php echo $printCARNAME; ?>">
			</div>
			<div>
				<label>Năm mua xe </label>
				<input type="number" name="carYear" value="<?php echo $printCARYEAR; ?>">
			</div>
			<div>
				<label>Địa chỉ </label>
				<input type="text" name="address" value="<?php echo $printADDRESS; ?>">
			</div>
			<div>
				<label>Email </label>
				<input type="email" name="mail" value="<?php echo $printEMAIL; ?>">
			</div>
			<div>
				<label>Số điện thoại </label>
				<input type="number" name="phone" value="<?php echo $printPHONE; ?>">
			</div>
			<div>
				<input type="submit" name="update" value="Cập nhật">
			</div>
		</form>
	</div>
</body>
</html>