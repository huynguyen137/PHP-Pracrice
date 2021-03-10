<!DOCTYPE html>
<html>
<head>
	<title>Đăng bài viết mới</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/main-style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/new-post-style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito Sans">
</head>
<body>
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
	<nav>
		<ul class="wrap">
			<li><a href="home.php" class="montserrat-font no-underline black-txt">Trang chủ</a></li>
			<li><a href="my-profile.php" class="montserrat-font no-underline black-txt">Trang cá nhân</a></li>
			<li><a href="new-post.php" class="montserrat-font no-underline black-txt">Đăng bài viết</a></li>
			<li><a href="rising-member.php" class="montserrat-font no-underline black-txt">Thành viên nổi bật</a></li>
			<li><a href="tag-vehicle-home.php" class="montserrat-font no-underline black-txt">Đam mê xe cộ</a></li>
			<li><a href="tag-tech-home.php" class="montserrat-font no-underline black-txt">Đam mê công nghệ</a></li>
		</ul>
	</nav>
	<section class="post-field">
		<div>
			<p class="montserrat-font bold-txt px40">Đăng bài viết mới</p>
		</div>
		<div>
			<form method="post" action="post-checking.php">
				<input type="text" name="title" placeholder="Tiêu đề bài viết" required>
				<select name="tag">
					<option hidden>Gắn nhãn cho bài viết</option>
					<option>Xe</option>
					<option>Công nghệ</option>
				</select>
				<textarea class="textField" required></textarea>
				<input type="submit" name="submit" value="Đăng">
			</form>
		</div>
	</section>
	<footer>
		<div class="contact">
			<p class="nunito-sans-font copyright">&copy; Blog của Huy</p>
			<p class="nunito-sans-font info">Liên hệ: 012345678 hoặc huy123@gmail.com</p>
		</div>
	</footer>
</body>
</html>