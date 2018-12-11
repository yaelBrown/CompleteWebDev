<?php 
  // Starts sessions
  session_start();
  
  // specifies username that is in session
  $_SESSION['username'] = "yaelbrown";
  
  // displays who is logged in this session
  echo $_SESSION['username'];
  
  // Checks if user is signed into this session, if not refers them back to login page.
  if ($_SESSION['email'] !== '') { // or: ' if ($_SESSION['email']) { '
    echo $_SESSION['email']." You are logged in!";
  } else {
    header("Location: signUpForm.php");
  }
?>