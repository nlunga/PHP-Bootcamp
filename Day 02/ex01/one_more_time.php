#!/usr/bin/php
<?php
  // Saturday(sometimes upper case in the beginning) 12 October(cap 1st) 2019 08:20:50
  $timezone_identifiers = DateTimeZone::listIdentifiers();
  foreach ($timezone_identifiers as $key => $list) {
    echo $list."\n";
  }
?>
