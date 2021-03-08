<!DOCTYPE html>
<html>
<head>
	<title>Blog của Huy</title>
	<link rel="stylesheet" type="text/css" href="#">
</head>
<body>
	<header>
		<div id="logo">
			<a><img src=""></a>
		</div>
		<div id="login"><!-- phần này chỉ hiện ra khi người dùng chưa đăng nhập -->
			<div>
				<form method="post" action="check-info.php">
					<label for="account">Email hoặc số điện thoại</label>
					<input type="text" name="acc" id="account">
					<label for="password">Mật khẩu</label>
					<input type="password" name="pwd" id="password">
				</form>
			</div>
			<div>
				<a href="sign-up.php">Chưa có tài khoản?Đăng ký ngay</a>
			</div>
		</div>
	</header>
	<nav class="wrap">
		<ul>
			<li><a href="home.php">Trang chủ</a></li>
			<li><a href="my-account.php">Trang cá nhân</a></li>
			<li><a href="new-post.php">Đăng bài viết</a></li>
			<li><a href="rising-member.php">Thành viên nổi bật</a></li>
			<li><a href="tag-vehicle-home.php">Đam mê xe cộ</a></li>
			<li><a href="tag-tech-home.php">Đam mê công nghệ</a></li>
		</ul>
	</nav>
	<div>
		<aside>
			<div>
				<p>Các bài viết mới nhất</p>
				<ul><!-- Danh mục các bài viết mới nhất xếp theo ngày đăng(demo, sau cần chỉnh sửa lại bằng code php dùng hàm for) -->
					<li><a href="">Bài viết</a></li>
					<li><a href="">Bài viết</a></li>
					<li><a href="">Bài viết</a></li>
					<li><a href="">Bài viết</a></li>
					<li><a href="">Bài viết</a></li>
				</ul>
			</div>
			<div>
				<p>Số lượng bài viết tháng này: </p>
			</div>
		</aside>
		<section>
			<div>
				<div>
					<img src="" alt="Ảnh minh họa bài viết">
				</div>
				<div>
					<p></p>
				</div>
			</div>
		</section>
	</div>
	<footer>
		<div>
			<p>&copy; Blog của Huy</p>
			<p>Liên hệ: 012345678 hoặc huy123@gmail.com</p>
		</div>
	</footer>
</body>
</html>