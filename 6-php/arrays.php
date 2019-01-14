<?php
  $myArray = array("Apple", "Ball", "Cat");

  print_r($myArray);

  $myArray[1] = "Duck";

  echo "<br><br>";
  echo $myArray[0];
  echo $myArray[1];
  echo $myArray[2];

  $anotherArray[0] = "pizza";
  $anotherArray[1] = "sandwich";
  $anotherArray[2] = "coffee";

  echo "<br><br>";
  print_r($anotherArray);

  $thirdArray = array(
    "France" => "French", 
    "US" => "English", 
    "Germany" => "German");

  echo "<br><br>";
  print_r($thirdArray);

  echo "<br><br>".sizeof($thirdArray);
?>