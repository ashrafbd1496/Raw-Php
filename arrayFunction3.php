<?php 

 $food = ['alu','potol','kumra','piaz','rosun'.'alu','kumra','rosun'];

$array_rev = array_reverse($food);


 echo "<pre>";
 print_r($array_rev);

 echo "<br>";
 //array_unique will only count a value one time, will skip duplicate value
//  Removes duplicate values from an array
$uarray =  array_unique($food);
 print_r($uarray);




 ?>