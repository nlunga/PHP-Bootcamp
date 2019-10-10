#!/usr/bin/php
<?php
  //$line = fopen("php://stdin", "w");
  // if ($line) {
    //echo "Enter a number: ";


    while (1) {
      $line = fopen("php://stdin", "r");
      echo "Enter a number: ";
      $find = trim(fgets($line));
      if ($find && is_numeric($find)) {
        // if (!$find)
        //   break;

        if ($find%2 == 0)
        {
          echo "The number ".trim($find)." is even\n";
        }
        else if ($find%2 != 0)
        {
          echo "The number ".trim($find)." is odd\n";
        }

        // else {
        //   echo $find." is not a number";
        // }
      }
      else if (feof($line)) {
         echo "^D\n";
         break;
       }
      else
        echo "'$find' is not a number: \n";

    }
    // if (!feof($line)) {
    //   echo "Error: unexpected fgets() fail\n";
    // }
    fclose($line);
  //}

?>
