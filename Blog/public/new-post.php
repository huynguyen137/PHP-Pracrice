<!DOCTYPE html>
<html>
<head>
	<title>Đăng bài viết mới</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<header>
		<div id="logo">
			<a><img src=""></a>
		</div>
	</header>
	<section>
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
	</section>
	<footer>
		<div>
			<p>&copy; Blog của Huy</p>
			<p>Liên hệ: 012345678 hoặc huy123@gmail.com</p>
		</div>
	</footer>
</body>
</html>