<?php
  // creates a cookie session
  setcookie("variableName", "value", time() + 60 * 60 * 24);
  
  // $_COOKIE['customerId'] = "test";

  echo $_COOKIE['customerId'];

  // If person logs out, set cookie value to a time in the past (1hr presented here)
  setcookie("variableName", "", time() - 60 * 60);
?>