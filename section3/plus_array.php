<?php
$arr1 = [
  'Apple' => 'Red',
  'Orange' => 'Yellow',
  'Melon' => 'Green'
];

$arr2 = [
  'Grape' => 'Purple',
  'Apple' => 'Green',
  'Strawberry' => 'Red'
];
$result = $arr1 + $arr2;
print_r($result);
// Array ( [Apple] => Red [Orange] => Yellow [Melon] => Green [Grape] => Purple [Strawberry] => Red )

$ary1 = [1,3,5];
$ary2 = [2,3,6];
$result = $ary1 + $ary2;
print_r($result);
// Array ( [0] => 1 [1] => 3 [2] => 5 )

$result = array_merge($ary1, $ary2);
print_r($result);
// Array ( [0] => 1 [1] => 3 [2] => 5 [3] => 2 [4] => 3 [5] => 6 )
