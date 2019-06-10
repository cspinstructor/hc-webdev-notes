<?php
  // print_r($_GET);
  echo "Hi there ".$_GET['myname']."!";
?>

<p>What's your name?</p>
<form>
  <input name="myname" type="text">
  <input type="submit" value="Go!">

</form>