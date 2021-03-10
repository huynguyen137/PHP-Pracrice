<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký tài khoản</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/main-style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/sign-up-style.css">
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
		<section class="sign-up-form">
			<div class="sign-title">
				<p class="montserrat-font bold-txt px40">Đăng ký tài khoản</p>
			</div>
			<div class="form">
				<form method="post" action="new-user-validate.php">
					<div>
						<label for="fullname" class="nunito-sans-font px30">Họ và tên</label><br>
						<input type="text" name="fullname" id="fullname" class="sign-input" required>
					</div>
					<div>
						<label for="email" class="nunito-sans-font px30">Email</label><br>
						<input type="email" name="email" id="email" class="sign-input" required>
					</div>
					<div>
						<label for="phone" class="nunito-sans-font px30">Số điện thoại</label><br>
						<input type="text" name="phone" id="phone" class="sign-input" required>
					</div>
					<div>
						<label for="password" class="nunito-sans-font px30">Mật khẩu</label><br>
						<input type="password" name="pwd" id="password" class="sign-input" required>
					</div>
					<div>
						<label for="re-pwd" class="nunito-sans-font px30">Nhập lại mật khẩu</label><br>
						<input type="password" name="re-pwd" id="re-pwd" class="sign-input" required>
					</div>
					<div>
						<input type="submit" name="submit" value="Đăng ký" class="button">
					</div>
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