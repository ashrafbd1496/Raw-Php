<?php 

	$dev = [

		'Ashraf'	=> 'Chittagong',

		'Naeem'	=> 'Madaripur',

		'Rifat'	=> 'Dhaka',

		'Soad'	=> 'Gazipur'

	];


	echo "<h2>Convert array data to json format</h2>" . '<br>';
	
	$data = json_encode($dev);


	//to write json data into file
	file_put_contents('data.json', $data);


	// get/catch data 

	$get_data = file_get_contents('data.json');

	echo $get_data .'<br>';

	echo "<h2>Convert json data to array</h2>" . '<br>';

	echo "<pre>";
	print_r(json_decode($get_data));

	echo "<br>";




	echo "<h2>Make unserialize from serialize data</h2>" . '<br>';

	$data = file_get_contents('test.txt');

	$unsrdata = unserialize($data);

	echo "<pre>";
	print_r($unsrdata);


	echo "<h2>Csv to array conversion</h2>" . '<br>';

	$data = fopen('data.csv', 'r+');

	$getcsv = fgetcsv($data);

	echo "<pre>";

	print_r($getcsv);


		








 ?>