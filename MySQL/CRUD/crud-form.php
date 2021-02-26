<!DOCTYPE html>
<html>
<head>
	<title>Chăm sóc khách hàng</title>
	<link rel="stylesheet" type="text/css" href="../../Form/style.css">
</head>
<body>
	<div>
		<div>
			<h2>Dịch vụ bảo dưỡng xe</h2>
		</div>

		<?php include 'crud-valid.php'; ?>

		<div>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
				<div>
					<label>Họ và tên </label>
					<input type="text" name="customer" value="<?php echo(htmlspecialchars($customer)) ?>">
					<span><?php echo htmlspecialchars($ERROR['cusERR']) ?></span>
				</div>
				<div>
					<label>Tên xe </label>
					<input type="text" name="carName" value="<?php echo(htmlspecialchars($carName)) ?>">
					<span><?php echo htmlspecialchars($ERROR['nameERR']) ?></span>
				</div>
				<div>
					<label>Năm mua xe </label>
					<input type="number" name="carYear" value="<?php echo(htmlspecialchars($carYear)) ?>">
					<span><?php echo htmlspecialchars($ERROR['yearERR']) ?></span>
				</div>
				<div>
					<label>Địa chỉ </label>
					<input type="text" name="address" value="<?php echo(htmlspecialchars($address)) ?>">
					<span><?php echo htmlspecialchars($ERROR['adERR']) ?></span>
				</div>
				<div>
					<label>Email </label>
					<input type="email" name="mail" value="<?php echo(htmlspecialchars($mail)) ?>">
					<span><?php echo htmlspecialchars($ERROR['mailERR']) ?></span>
				</div>
				<div>
					<label>Số điện thoại </label>
					<input type="number" name="phone" value="<?php echo(htmlspecialchars($phone)) ?>">
					<span><?php echo htmlspecialchars($ERROR['phoneERR']) ?></span>
				</div>
				<div>
					<input type="submit" name="submit" value="Gửi">
				</div>
			</form>
		</div>
	</div>
</body>
</html>