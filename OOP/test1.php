<?php 
// class Student {
// 	public $year;
// 	private $classroom;
// 	protected $grade;

// 	public function __construct($y, $c, $g) {
// 		$this->year = $y;
// 		$this->classroom = $c;
// 		$this->grade = $g;
// 	}

// 	public function getRoom() {
// 		return $this->classroom;
// 	}

// 	public function getGrade() {
// 		return $this->grade;
// 	}
// }

// class Graduate extends Student {
// 	private $status;

// 	public function __construct($status) {
// 		$this->status = $status;
// 	}

// 	public function getStatus()
// 	{
// 		return $this->status;
// 	}
// }

// $stu1 = new Student('2001','R101','10');
// echo $stu1->year . "<br>";
// echo $stu1->getRoom() .'<br>';
// echo $stu1->getGrade(). '<br>';

// $gradStu = new Graduate('graduated');
// echo $gradStu->getStatus();


echo "<br>";

abstract class Dog {
	public function sound() {
		return "Bark.";
	}

	abstract public function origin();

	abstract public function maxAge();
}

class Shiba extends Dog {
	public $name = "Shiba Inu";
	public function origin() {
		return "Japan.";
	}

	public function maxAge() {
		return "15 years.";
	}
}
class Dachshund extends Dog {
	public $name = "Dachshund";
	public function origin() {
		return "Germany.";
	}

	public function maxAge() {
		return "16 years.";
	}
}

class PhuQuoc extends Dog {
	public $name = "Phú Quốc";
	public function origin() {
		return "Viet Nam.";
	}

	public function maxAge() {
		return "17 years.";
	}
}

class Beagle extends Dog {
	public $name = "Beagle";
	public function origin() {
		return "UK.";
	}

	public function maxAge() {
		return "15 years.";
	}
}

$shiba = new Shiba();
echo $shiba->name;
echo "<br>";
echo $shiba->origin();
echo "<br>";
echo $shiba->maxAge();
echo "<br><br>";

$dachshund = new Dachshund();
echo $dachshund->name;
echo "<br>";
echo $dachshund->origin();
echo "<br>";
echo $dachshund->maxAge();
echo "<br><br>";

$phuQuoc = new PhuQuoc();
echo $phuQuoc->name;
echo "<br>";
echo $phuQuoc->origin();
echo "<br>";
echo $phuQuoc->maxAge();
echo "<br><br>";

$beagle = new Beagle();
echo $beagle->name;
echo "<br>";
echo $beagle->origin();
echo "<br>";
echo $beagle->maxAge();
echo "<br><br>";
?>