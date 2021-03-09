<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký tài khoản</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/main-style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito Sans">
</head>
<body>
	<div>
		<header class="wrap">
			<div id="top-header" class="space-between wrap">
				<div id="logo">
					<a href="home.php"><img src="../assets/img/logo-auto-01.jpg" alt="Logo" class="logo"></a>
					<div id="title">
						<p class="montserrat-font px310 logo-txt">BLOG CỦA HUY</p>
					</div>
				</div>
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
			<div class="contact">
				<p class="nunito-sans-font copyright">&copy; Blog của Huy</p>
				<p class="nunito-sans-font info">Liên hệ: 012345678 hoặc huy123@gmail.com</p>
			</div>
		</footer>
	</div>
</body>
</html>