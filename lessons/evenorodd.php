<?php
  // print_r($_GET);

  $n = $_GET['number'];
  // echo $n;

  if($n % 2 == 0) {
    echo $n." is an even number";
  } else {
    echo $n." is an odd number";
  }
?>

<p>Please enter a number</p>
<form>
  <input name="number" type="text">
  <input type="submit" value="Check">

</form>