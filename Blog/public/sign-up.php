<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký tài khoản</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<header>
		<div id="logo">
			<a><img src=""></a>
		</div>
	</header>
	<section>
		<div>
			<form method="post" action="new-user-validate.php">
				<div>
					<label for="fullname">Họ và tên</label>
					<input type="text" name="fullname" id="fullname" required>
				</div>
				<div>
					<label for="email">Email</label>
					<input type="email" name="email" id="email" required>
				</div>
				<div>
					<label for="phone">Số điện thoại</label>
					<input type="text" name="phone" id="phone" required>
				</div>
				<div>
					<label for="password">Mật khẩu</label>
					<input type="password" name="pwd" id="password" required>
				</div>
				<div>
					<label for="re-pwd">Họ và tên</label>
					<input type="password" name="re-pwd" id="re-pwd" required>
				</div>
				<input type="submit" name="submit" value="Đăng ký">
			</form>
		</div>
	</section>
	<footer>
		<div>
			<p>&copy; Blog của Huy</p>
			<p>Liên hệ: 012345678 hoặc huy123@gmail.com</p>
		</div>
	</footer>
</body>
</html>