<?php 

echo "<h2>CSV - Comma-Separated Values</h2>";
	$devs =[ 

	[	'Name'	=> 'Ashraf',
		'Age'	=> '32',
		'Job'	=> 'Php Developer',
	],
	

	[	'Name'	=> 'Ahmad',
		'Age'	=> '17',
		'Job'	=> 'Driver',
	],
	

	[	'Name'	=> 'Umar',
		'Age'	=> '2',
		'Job'	=> 'Student',
	]

];




	$file = fopen('data.csv', 'w+');

	foreach ($devs as $dev) {

		fputcsv($file, $dev);
	}





 ?>