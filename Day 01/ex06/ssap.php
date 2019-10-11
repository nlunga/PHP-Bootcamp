#!/usr/bin/php
<?php
function ft_split($string)
{
  $res = str_word_count($string, 1);
  sort($res);
  return $res;
}
/*
$count = 1;
while ($argv[$count]) {
  if (str_word_count($argv[$count]) > 1) {
    $string = ft_split($argv[$count]);
    $index = 0;
    while ($string[$index])
  }
}*/

// $i = 1;
// $k = 0;
// $array[];
// while ($argv[$i]) {
//   $temp[$i] = trim($argv[$i]);
//   if (str_word_count($temp[$i]) == 1) {
//     $array[$k] = $temp[$i]
//   }
//   elseif (str_word_count($temp[$i]) > 1) {
//     $string = ft_split($temp[$i]);
//     //array_push($array, $string);
//     $j = 0;
//     while ($string[$j]) {
//       array_push($array, $string[$j++]);
//     }
//   }
//   $i++;
//   $k++;
// }
  /*print_r($argv);*/
  $index = 1;
  $str = "";
  $words_arr;
  while ($index < $argc)
  {
      $str = $str." ".$argv[$index];
      $index++;
  }
  $array = preg_split('/\s+/', trim($str));
  sort($array);
  foreach($array as $string)
  {
      echo ($string);
      echo ("\n");
  }
?>
