<?php
  $user = "hanchiang";

  if($user == "hanchiang") {
    echo "Hello ".$user;
  } else {
    echo "I don't know you";
  }

  echo "<br><br>";

  $age = 16;

  if($age >= 18 || $user == "hanchiang") {
    echo "You may proceed...";
  } else {
    echo "Sorry, you are underaged";
  }

?>