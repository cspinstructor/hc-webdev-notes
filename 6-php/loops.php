<?php
  for($i = 10; $i >= 0; $i--) {
    echo $i."<br>";
  }

  echo "<br><br>";
  $names = array("Andrew", "Betty", "Cathy", "Eve");

  for($i=0; $i < sizeof($names); $i++) {
    echo $names[$i]."<br>";
  }

  echo "<br><br>";
  foreach($names as $key => $value) {
    echo $key." = ".$value."<br>";
  }

  echo "<br><br>";
  $t = 0;
  while($t <= 10) {
    echo $t."<br>";
    $t++;
  }

  echo "<br><br>";
  $j = 0;
  while($j < sizeof($names)) {
    echo $names[$j]."<br>";
    $j++;
  }
?>