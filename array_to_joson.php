<?php 

	$food = [

		'Ashraf'	=> 'Chittagong',

		'Naeem'	=> 'Madaripur',

		'Rifat'	=> 'Dhaka',

		'Soad'	=> 'Gazipur'

	];

	$json_data = json_encode($food);

	$file = fopen('data.json', 'w+');

	fwrite($file, $json_data);

 ?>