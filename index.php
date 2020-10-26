
<?php 


	
//fopen()- Read one line from the open file

$file = fopen("data.txt","r");

echo fgets($file). '<br>';
echo fgets($file) .'<br>';;
echo fgets($file) .'<br>';;
echo fgets($file) .'<br>';;
echo fgets($file);
echo fgets($file);

fclose($file);



$file = fopen('test.txt', 'w');

echo fwrite($file, 'I am want to be php developer');

$file = fopen('data.csv', 'w+');

echo fwrite($file, 'I love Muhammad');



 ?>