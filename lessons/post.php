<?php
  // print_r($_GET);

  if($_POST) {
    echo "Hi there ".$_POST['myname']."!";
  }
  
?>

<p>What's your name?</p>
<form method="post">
  <input name="myname" type="text">
  <input type="submit" value="Go!">

</form>