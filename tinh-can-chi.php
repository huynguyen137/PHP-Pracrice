<!DOCTYPE html>
<html>
<head>
	<title>Xem năm sinh âm lịch và mệnh</title>
	<link rel="stylesheet" type="text/css" href="Form/style.css">
</head>
<body>
	<div class="center column">
		<div>
			<?php 
				$err;
				$year;
				$can = $chi = $canMenh = $chiMenh = $menh = "" ;

				if (isset($_POST['submit'])) {
					if (empty($_POST['year'])) {
						$err = "Hãy nhập năm sinh của bạn!";
					} else {
						$year = $_POST['year'];
						switch ($year % 10) {
							case 0:
								$can = "Canh";
								$canMenh = 4 ;
								break;
							case 1:
								$can = "Tân";
								$canMenh = 4 ;
								break;
							case 2:
								$can = "Nhâm";
								$canMenh = 5;
								break;
							case 3:
								$can = "Quý";
								$canMenh = 5;
								break;
							case 4:
								$can = "Giáp";
								$canMenh = 1 ;
								break;
							case 5:
								$can = "Ất";
								$canMenh = 1 ;
								break;
							case 6:
								$can = "Bính";
								$canMenh = 2 ;
								break;
							case 7:
								$can = "Đinh";
								$canMenh = 2 ;
								break;
							case 8:
								$can = "Mậu";
								$canMenh = 3 ;
								break;	
							case 9:
								$can = "Kỉ";
								$canMenh = 3 ;
								break;
							default:
								$err = "Hãy nhập năm sinh hợp lệ!";
								break;
						}

						switch ($year % 12) {
							case 0:
								$chi = "Thân";
								$chiMenh = 1;
								break;
							case 1:
								$chi = "Dậu";
								$chiMenh = 1;
								break;							
							case 2:
								$chi = "Tuất";
								$chiMenh = 2;
								break;
							case 3:
								$chi = "Hợi";
								$chiMenh = 2;
								break;
							case 4:
								$chi = "Tý";
								$chiMenh = 0;
								break;
							case 5:
								$chi = "Sửu";
								$chiMenh = 0;
								break;
							case 6:
								$chi = "Dần";
								$chiMenh = 1;
								break;
							case 7:
								$chi = "Mão";
								$chiMenh = 1;
								break;
							case 8:
								$chi = "Thìn";
								$chiMenh = 2;
								break;	
							case 9:
								$chi = "Tỵ";
								$chiMenh = 2;
								break;
							case 10:
								$chi = "Ngọ";
								$chiMenh = 0;
								break;
							case 11:
								$chi = "Mùi";
								$chiMenh = 0;
								break;
							default:
								$err = "Hãy nhập năm sinh hợp lệ!";
								break;
						}

						$menh = $canMenh + $chiMenh;
						if($menh > 5) {
							$menh -= 5;
						}

						switch ($menh) {
							case 1:
								$menh = "Kim";
								break;
							case 2:
								$menh = "Thủy";
								break;
							case 3:
								$menh = "Hỏa";
								break;
							case 4:
								$menh = "Thổ";
								break;
							case 5:
								$menh = "Mộc";
								break;
						}

						function namSinh() {
							return "Năm sinh âm lịch của bạn là " .$GLOBALS['can']. " " .$GLOBALS['chi'];
						}

						function menh() {
							return "Mệnh của bạn là " .$GLOBALS['menh'];
						}
					}
				}

			 ?>
		</div>
		<div>
			<h2 class="blueText">Xem năm sinh âm lịch và mệnh</h2>
		</div>
		<br>
		<div>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<div>
					<input type="number" name="year">
				</div>
				<div>
					<input type="submit" name="submit" class="button">
				</div>
			</form>
		</div>
		<div>
		<?php 
			if (isset($_POST['submit'])) {
				if(!empty($_POST['year'])) {
					echo namSinh();
					echo "<br>";
					echo menh();
				} else {
					echo $err;
				}
			}
		 ?>
		</div>
	</div>
</body>
</html>