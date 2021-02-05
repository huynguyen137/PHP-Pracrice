<?php 
	class Student {
		public $year;
		private $classroom;
		protected $grade;

		public function __construct($y, $c, $g) {
			$this->year = $y;
			$this->classroom = $c;
			$this->grade = $g;
		}

		public function getRoom() {
			return $this->classroom;
		}

		public function getGrade() {
			return $this->grade;
		}
	}

	class Graduate extends Student {
		private $status;

		public function __construct($status) {
			$this->status = $status;
		}

		public function getStatus()
		{
			return $this->status;
		}
	}

	$stu1 = new Student('2001','R101','10');
	echo $stu1->year . "<br>";
	echo $stu1->getRoom() .'<br>';
	echo $stu1->getGrade(). '<br>';

	$gradStu = new Graduate('graduated');
	echo $gradStu->getStatus();
 ?>