<?php 
class Human {
	public $month;
	public $day;
	private $error = ["month"=> "", "day"=> ""];

	public function __construct($m, $d) {
		$this->month = $m;
		$this->day = $d;
	}

	// public function specialMonth() {
	// 	return 0;
	// }

	public function checkValid() {
		if($this->month<0 || $this->month>12) {
			echo "Please select a valid month. <br>";
			$this->error["month"] = 1;
		}
		if($this->day<0 || $this->day>31) {
			echo "Please select a valid day.";
			$this->error["day"] = 1;
		}
		if(!array_filter($this->error)) {
			return 1;
		}
	}

}

class Zodiac extends Human {
	public $result;
	private $zodiac = array('Aquarius', 'Pisces', 'Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricorn');

	public function __construct($r) {
		$this->result = $r;
	}

	public function result() {
		return "Your Zodiac sign is ". $this->zodiac[$this->result];
	}
}
if(isset($_POST['submit'])) {
$man = new Human($_POST['month'], $_POST['day']);
// echo $man->month. "<br>";
// echo $man->day;
// echo $man->checkValid() . "<br>";
if($man->checkValid()) {
	switch ($man->month) {
		case '1':
			if($man->day < 20) {
				$z = new Zodiac('11');
				echo $z->result();
			} else {
				$z = new Zodiac('0');
				echo $z->result();
			}
			break;
		case '2':
			if($man->day < 19) {
				$z = new Zodiac('0');
				echo $z->result();
			} elseif ($man->day >29) {
				echo "Invalid day";
				break;
			}
			else {
			$z = new Zodiac('1');
			echo $z->result();
			}
			break;
		case '3':
			if($man->day < 21) {
				$z = new Zodiac('1');
				echo $z->result();
			} else {
				$z = new Zodiac('2');
				echo $z->result();
			}
			break;
		case '4':
			if($man->day < 20) {
				$z = new Zodiac('2');
				echo $z->result();
			} elseif ($man->day >30) {
				echo "Invalid day";
				break;
			} else {
				$z = new Zodiac('3');
				echo $z->result();
			}
			break;
		case '5':
			if($man->day < 21) {
				$z = new Zodiac('3');
				echo $z->result();
			} else {
				$z = new Zodiac('4');
				echo $z->result();
			}
			break;
		case '6':
			if($man->day < 21) {
				$z = new Zodiac('4');
				echo $z->result();
			} elseif ($man->day >30) {
				echo "Invalid day";
				break;
			} else {
				$z = new Zodiac('5');
				echo $z->result();
			}
			break;
		case '7':
			if($man->day < 23) {
				$z = new Zodiac('5');
				echo $z->result();
			} else {
				$z = new Zodiac('6');
				echo $z->result();
			}
			break;
		case '8':
			if($man->day < 23) {
				$z = new Zodiac('6');
				echo $z->result();
			} else {
				$z = new Zodiac('7');
				echo $z->result();
			}
			break;
		case '9':
			if($man->day < 23) {
				$z = new Zodiac('7');
				echo $z->result();
			} elseif ($man->day >30) {
				echo "Invalid day";
				break;
			} else {
				$z = new Zodiac('8');
				echo $z->result();
			}
			break;
		case '10':
			if($man->day < 23) {
				$z = new Zodiac('8');
				echo $z->result();
			} else {
				$z = new Zodiac('9');
				echo $z->result();
			}
			break;
		case '11':
			if($man->day < 22) {
				$z = new Zodiac('9');
				echo $z->result();
			} elseif ($man->day >30) {
				echo "Invalid day";
				break;
			} else {
				$z = new Zodiac('10');
				echo $z->result();
			}
			break;
		case '12':
			if($man->day < 22) {
				$z = new Zodiac('10');
				echo $z->result();
			} else {
				$z = new Zodiac('11');
				echo $z->result();
			}
			break;
		default:
			# code...
			break;
	}
}
}
?>