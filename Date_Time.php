<?php 

echo time();

echo "<br>";


echo date('d m y');

//to show date time in full format , need to use capital letter

echo "<br>";
echo date('D M Y');

echo "<br>";
echo date('d m Y');

echo "<br>";
echo date('d F Y');

echo "<br>";
echo date('g : i : A');

echo "<br>";
echo date('H : i : A');

//to know more about the date function check out the links below-

// https://www.w3schools.com/php/func_date_date.asp
//https://www.php.net/manual/en/function.date.php
echo "<br>";
date_default_timezone_set("Asia/Dhaka");
echo date('w');


 ?>