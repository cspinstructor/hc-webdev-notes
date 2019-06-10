<?php
  $family = array("Anne", "Bob", "Cathy");
  $isknown = false;

  if($_POST) {
    foreach($family as $value) {
      if($value == $_POST['name']) {
        $isknown = true;
      }
    }

    if($isknown) {
      echo "Hi there ".$_POST['name']."!";
    } else {
      echo "I don't know you!";
    }
    
  }
  
?>

<p>What's your name?</p>
<form method="post">
  <input name="name" type="text">
  <input type="submit" value="Go!">
</form>