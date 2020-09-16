<?php 

function resultSystem($mark){



	if ($mark >= 0 && $mark <= 32) {
		$grade = 'F';
	}elseif ($mark >= 33 && $mark <= 39) {
		$grade = 'D';
	}elseif ($mark >= 40 && $mark <= 49) {
		$grade = 'C';
	}elseif ($mark >= 50 && $mark <= 59) {
		$grade = 'B';
	}elseif ($mark >= 60 && $mark <= 69) {
		$grade = 'A-';
	}elseif ($mark >= 70 && $mark <= 79) {
		$grade = 'A';
	}elseif ($mark >= 80 && $mark <= 100) {
		$grade = 'A+';
	}else{
		$grade = 'Invalid';
	}

	return $grade; 

}

echo resultSystem(50);



 ?>
