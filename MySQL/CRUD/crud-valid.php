<?php 
	$customer = $carName = $carYear = $address = $mail = $phone = "";
	$ERROR = array("cusERR"=> "", "nameERR" => "", "yearERR" => "", "adERR" => "", "mailERR" => "", "phoneERR" => "" ) ;

	if (isset($_POST['submit'])) {
		if(empty($_POST['customer'])) {
			$ERROR['cusERR'] = "*Hãy nhập họ và tên!";
		} else {
			$customer = $_POST['customer'];
			if(!preg_match('/^[a-zA-Z]/', $customer)) {
				$ERROR['cusERR'] = "*Họ và tên không hợp lệ!";
			}
		}

		if(empty($_POST['carName'])) {
			$ERROR['nameERR'] = "*Hãy nhập tên xe của bạn!";
		} else {
			$carName = $_POST['carName'];
			if(!preg_match('/^[a-zA-Z0-9]/', $carName)) {
				$ERROR['nameERR'] = "*Tên xe không được chứa các ký tự đặc biệt!";
			}
		}

		if(empty($_POST['carYear'])) {
			$ERROR['yearERR'] = "*Hãy nhập năm bạn mua xe!";
		} else {
			$carYear = $_POST['carYear'];
			if(preg_match('/\D+/', $carYear)) {
				$ERROR['carYear'] = "*Năm không chứa chữ cái và các ký tự đặc biệt!";
			}
		}

		if(empty($_POST['address'])) {
			$ERROR['adERR'] = "*Hãy nhập địa chỉ của bạn!";
		} else {
			$address = $_POST['address'];
			if(!preg_match('/^[a-zA-Z0-9]/', $address)) {
				$ERROR['adERR'] = "*Địa chỉ không được chứa các ký tự đặc biệt!";
			}
		}

		if(empty($_POST['mail'])) {
			$ERROR['mailERR'] = "*Hãy nhập email của bạn!";
		} else {
			$mail = $_POST['mail'];
			if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
				$ERROR['mailERR'] = "*Email không hợp lệ!";
			}
		}

		if(empty($_POST['phone'])) {
			$ERROR['phoneERR'] = "*Hãy nhập số điện thoại!";
		} else {
			$phone = $_POST['phone'];
			if(preg_match('/\D+/', $phone)) {
				$ERROR['phoneERR'] = "*Số điện thoại không hợp lệ!";
			}
		}

		if (array_filter($ERROR)) {
			header('location: error-message.php');
		} else {
			header('location: crud-insert.php');
		}
	}
 ?>