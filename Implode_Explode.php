<?php 


	$name= 'My name is Md Ashraf Uddin, I want to be php developer, I love reading book';

	//The explode() function breaks a string into an array.

	//here we can use space, comma or anything instead of I inside explode

$xpld = explode('I' , $name);

	echo "<pre>";
	print_r($xpld);

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "The explode() function breaks a string into an array.";

	echo "<br>";
	echo "<br>";
	echo "<br>";


	$food = ['alu','potol','kumra','piaz','rosun'.'alu','kumra','rosun'];

//implode function array k string a porinoto kore

	$istr = implode(' ', $food);

	echo $istr;






 ?>