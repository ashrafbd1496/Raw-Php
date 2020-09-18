<?php 

 $food = ['alu','potol','kumra','piaz','rosun'];


 //array_push() - fucntion will add data at the bottom of the array
  array_push($food, 'Tomato','Gazor','Naspati');

  echo '<br>';

//array pop() will delete data from the bottom of the array
  array_pop($food);

  echo "<br>";

// current() function will show first value of the arreay
  print_r(current($food));

echo '<br>';

	// count() fucntion will count/show total value of the array

 echo count($food);

 echo '<br>';

 // It will show the 4th index value of the array as array index start from zero
 echo $food[3];

 echo '<br>';
// array_shift() will remove first data from top
array_shift($food);

 echo '<br>';
//array_unshift() will add value at the top
array_unshift($food, 'Apple');




echo "<pre>";
 print_r($food);


 echo '<br>';
  echo '<br>';


//Html in php
echo " To see array functions check out the link-  <a href='https://www.w3schools.com/php/php_ref_array.asp'>Array function</a>";

 echo '<br>';
  echo '<br>';

$slice = array_slice($food, 1, 4);

print_r($slice);



 ?>
