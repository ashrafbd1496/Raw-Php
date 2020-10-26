<?php 

	$food = [

		'Ashraf'	=> 'Chittagong',

		'Naeem'	=> 'Madaripur',

		'Rifat'	=> 'Dhaka',

		'Soad'	=> 'Gazipur'

	];

	$seri=  serialize($food);

	$file = fopen('test.txt', 'w+');

	fwrite($file,$seri );



 ?>