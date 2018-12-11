<?php
  // Used to include php file into current file
  include("includedfile.php");
  
  // Get html contents of another file.
  echo file_get_contents("http://www.yaelbrown.io");
  
?>