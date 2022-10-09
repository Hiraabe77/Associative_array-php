<?php
// $number=[13,2,30,100,50,60,7,8,9,130];
// print_r($number);
// sort($number);
// print_r($number);
// rsort($number);
// print_r($number);
$number=[13,2,30,100,50,60,78,8,9,130];
$add=[4,10,3,5,30,55,44,1000,5];
$all_numbers=array_merge($number,$add);
sort($all_numbers);
print_r($all_numbers);
?>