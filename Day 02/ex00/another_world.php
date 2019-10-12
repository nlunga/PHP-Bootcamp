#!/usr/bin/php
<?php
  	function my_clean($str)
  	{
    	$temp = trim($str);
    	$res = preg_replace('/(\s+)|(\t+)/', ' ', $temp);
    	return $res;
	 }
	if ($argc > 1)
		echo my_clean($argv[1])."\n";
?>
