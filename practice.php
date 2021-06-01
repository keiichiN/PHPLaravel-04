<?php

//1
function double($num){
 return $num * 2 ;
}
echo double(100);

//2
function add($a,$b){
 return $a + $b ;
}
echo add(2,5);

//3
function kake($arr) {
 $result = 1;
 foreach($arr as $a) {
  $result *= $a;
    }
return $result;
}
echo kake(array(1, 3, 5, 7, 9));

//4
 function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
   if ($max_number < $a) {
    $max_number = $a;
   }
 }
 return $max_number;
  }
echo max_array([5, 2, 12, 6, 7]);

//5
//strip_tags() の例

$AB = '<p>ohayo</p><!-- Comment --> <a href="#fragment">oyasumi</a>';
echo strip_tags($AB);

//array_push
$snack = array("choco", "cake");
array_push($snack,"okaki", "apple");
print_r($snack);


//array_merge
$array1 = array();
$array2 = array(1 => "data");
$result = array_merge($array1, $array2);
print_r($result);


//time, mktime
  $time = mktime(9);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

//date
date_default_timezone_set('UTC');
echo date("l");
echo date('l jS \of F Y h:i:s A');

?>