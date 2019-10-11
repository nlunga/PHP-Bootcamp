#!/usr/bin/php
<?php
  function ft_split($string)
  {
    $res = str_word_count($string, 1);
    sort($res);
    return $res;
  }
?>
