<?php
  // function ft_split($string)
  // {
  //   $res = str_word_count($string, 1);
  //   sort($res);
  //   return $res;
  // }
  // $i = 0;
  // $str = trim($argv[1])
  // $len = strlen($str);
  // $arr = ft_split($str);
  // while ($arr[$i])
  //   $i++;
  // if (count($str) > 0) {
  //   foreach ($test as $tost) {
  //     echo preg_replace()
  //   }
  // }

  function rostring($argc, $argv)
  {
    $i = 1;
    $str = "";
    $words_arr;
    while ($i < $argc)
    {
      $str = $str." ".$argv[$i];
      $i++;
    }
    $words_arr = preg_split('/\s+/', trim($str));
    $i = 1;
    while ($words_arr[$i])
    {
      echo($words_arr[$i++]);
      echo(" ");
    }
    echo("$words_arr[0]\n");
  }
  if ($argc < 2)
    return;
  rostring($argc, $argv);
?>
