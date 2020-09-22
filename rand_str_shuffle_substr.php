<?php 

//Generate random numbers 	
echo rand(0,100000);

echo "<br>";

//suffle strings
echo str_shuffle('abcdABCD1234@#$^&%');

 echo "<br>";

$login_code = str_shuffle('zxcvbADBCH@#$^&%54895');

echo substr($login_code, 0, 5);

 ?>