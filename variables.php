<?php
$num1=10;
$num2=20;
 $y=$num1+$num2;
 echo "$y 
 <br>";
 $name="abdullahi ali hiraabe";
 $tell=06166262;
 $bool=true;
  echo "$name,$tell,$bool <br>";

 /// Array 
$number=[1,2,3,4,5,6,7,8,9,10];
// echo  $number[1];
// echo count($number);
// array_push($number,11);
// echo count($number);
array_pop($number);
print_r($number);
array_unshift($number); // add at the begining 
print_r($number);
array_shift($number); //removing at the begining
print_r($number);

?>