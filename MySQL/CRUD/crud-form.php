<!DOCTYPE html>
<html>
<head>
	<title>Chăm sóc khách hàng</title>
	<link rel="stylesheet" type="text/css" href="../../Form/style.css">
</head>
<body>
	<div class="center">
		<div>
			<h2 class="blueText">Dịch vụ bảo dưỡng xe</h2>
		</div>

		<?php include 'crud-valid.php'; ?>

		<div>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<div>
					<label>Họ và tên </label>
					<input type="text" name="customer" value="<?php echo(htmlspecialchars($customer)); ?>">
					<span style="color: red;"><?php echo htmlspecialchars($ERROR['cusERR']); ?></span>
				</div>
				<div>
					<label>Tên xe </label>
					<input type="text" name="carName" value="<?php echo(htmlspecialchars($carName)); ?>">
					<span style="color: red;"><?php echo htmlspecialchars($ERROR['nameERR']); ?></span>
				</div>
				<div>
					<label>Năm mua xe </label>
					<input type="number" name="carYear" value="<?php echo(htmlspecialchars($carYear)); ?>">
					<span style="color: red;"><?php echo htmlspecialchars($ERROR['yearERR']); ?></span>
				</div>
				<div>
					<label>Địa chỉ </label>
					<input type="text" name="address" value="<?php echo(htmlspecialchars($address)); ?>">
					<span style="color: red;"><?php echo htmlspecialchars($ERROR['adERR']); ?></span>
				</div>
				<div>
					<label>Email </label>
					<input type="email" name="mail" value="<?php echo(htmlspecialchars($mail)); ?>">
					<span style="color: red;"><?php echo htmlspecialchars($ERROR['mailERR']); ?></span>
				</div>
				<div>
					<label>Số điện thoại </label>
					<input type="number" name="phone" value="<?php echo(htmlspecialchars($phone)); ?>">
					<span style="color: red;"><?php echo htmlspecialchars($ERROR['phoneERR']); ?></span>
				</div>
				<div>
					<input type="submit" name="submit" value="Gửi" class="button">
				</div>
			</form>
		</div>
		<div>
			<a href="crud-info-checking.php">Kiểm tra và cập nhật thông tin</a>
		</div>
	</div>
</body>
</html>