#!/usr/bin/php
<?php
  $str = trim($argv[1]);
  $temp = preg_replace('/(\s+)/', ' ', $str);
  echo $temp;
?>
