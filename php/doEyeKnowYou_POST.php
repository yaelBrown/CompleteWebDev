<?php
  if ($_POST) {
      $namesArr = array("Steve", "Mike", "Tom");
      $i = 0;

      for ($i = 0; $i < sizeof($namesArr); $i++) {
        if ($names['value'] == $namesArr[$i]) {
            echo "I know you<br>";
        } else if {
            echo "I don't know you<br>";
        }
      }
  }

?>


<p>Please enter your name</p>

<form method="post">
  <input name="names" type="text">
  <input type="submit" value="Go!">
</form>