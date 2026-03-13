<?php 
 $str = "This This This";
 echo $str. "<br>";
 $lenn = strlen($str);
 echo "The length of this string is ". $lenn . " . Thank you <br>";
 echo "The number of words in this string is ". $lenn . " . Thank you <br>";
 echo "The reversed string is " .strrev($str). ". Thank You <br>";
 echo "The search for is in this string is ". strpos($str, "is") . ". Thank You <br>";
 echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank You <br>";
 // echo $lenn;
 ?>