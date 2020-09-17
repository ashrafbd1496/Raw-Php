<?php 

// function resultSystem($mark){

// 	//Grade Calculation

// 	if ($mark >= 0 && $mark <= 32) {
// 		$grade = 'F';
// 	}elseif ($mark >= 33 && $mark <= 39) {
// 		$grade = 'D';
// 	}elseif ($mark >= 40 && $mark <= 49) {
// 		$grade = 'C';
// 	}elseif ($mark >= 50 && $mark <= 59) {
// 		$grade = 'B';
// 	}elseif ($mark >= 60 && $mark <= 69) {
// 		$grade = 'A-';
// 	}elseif ($mark >= 70 && $mark <= 79) {
// 		$grade = 'A';
// 	}elseif ($mark >= 80 && $mark <= 100) {
// 		$grade = 'A+';
// 	}else{
// 		$grade = 'Invalid';
// 	}

// 	return $grade; 

// }

// echo resultSystem(60);

//ResultSystem with gpa

function resultSystemWithGpa($mark){

	//Grade Calculation

	if ($mark >= 0 && $mark <= 32) {
		$grade = 'F';
		$gpa = 0 ;
	}elseif ($mark >= 33 && $mark <= 39) {
		$grade = 'D';
		$gpa = 1 ;
	}elseif ($mark >= 40 && $mark <= 49) {
		$grade = 'C';
		$gpa = 2 ;
	}elseif ($mark >= 50 && $mark <= 59) {
		$grade = 'B';
		$gpa = 3 ;	
	}elseif ($mark >= 60 && $mark <= 69) {
		$grade = 'A-';
		$gpa = 3.5 ;
	}elseif ($mark >= 70 && $mark <= 79) {
		$grade = 'A';
		$gpa = 4 ;
	}elseif ($mark >= 80 && $mark <= 100) {
		$grade = 'A+';
		$gpa = 5 ;
	}else{
		$grade = 'Invalid';
		$gpa = 'Invalid' ;
	}

	// return "Gpa $gpa and Grade $grade";

	// Return Message using switch case
	switch ($gpa) {
		case '0':
			return "<spna style='color: Red; font-size: 30px;'>You are fail</span>";
			break;
		
		default:
			return "<spna style='color: Green; font-size: 30px;'>You are Passed. Your Gpa $gpa and Grade $grade </span>";
			break;
	}

}

 echo resultSystemWithGpa(0);

 ?>