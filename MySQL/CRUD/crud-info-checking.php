<!DOCTYPE html>
<html>
<head>
	<title>Kiểm tra và chỉnh sửa thông tin</title>
	<link rel="stylesheet" type="text/css" href="../../Form/style.css">
</head>
<body>
	<div class="center">
		<?php 
			include 'crud-read.php';
			include 'crud-update.php';
			include 'click-to-show.php';
			include 'crud-delete.php';
		 ?>
		<div class="center">
			<h1 class="blueText">Kiểm tra và chỉnh sửa thông tin</h1>
			<form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<div>
					<label>Nhập số điện thoại của bạn </label>
					<input type="number" name="phone">
				</div>
				<div>
					<input type="submit" name="check" value="Kiểm tra" class="button">
				</div>
			</form>
		</div>
		<div class="<?php echo $content; ?>">
			<h3>Chỉnh sửa thông tin</h3>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<div style="display: none;">
					<input type="text" name="id" value="<?php echo $id; ?>">
				</div>
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
					<input type="submit" name="update" value="Chỉnh sửa" class="button">
					<input type="submit" name="delete" value="Xóa toàn bộ thông tin của bạn" class="button">
				</div>
			</form>
		</div>
</div>
</body>
</html>