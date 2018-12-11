<?php
  // converts password into a md5 hash (unique one way hash, common passwords are detectable by hackers)
  echo md5("password"); 

  // Level 3 encryption
  $salt = "ifhp4o$@%G5if055%@^Y^";
  echo md5($salt."password");

  // Level 4 encrpytion (use something fixed like the id number)
  echo md5(md5($row['id'])."password");
  
  // (new) Generate a hash of the password "mypassword" 
  $hash = password_hash("mypassword", PASSWORD_DEFAULT);

  // (new) Echoing it out, so we can see it:
  echo $hash;

  // (new) Some line breaks for a cleaner output:
  echo "<br><br>";

  // (new) Using password_verify() to check if "mypassword" matches the hash.
  // (new) Try changing "mypassword" below to something else and then refresh the page.
  if (password_verify('mypassword', $hash)) {
      echo 'Password is valid!';
  } else {
      echo 'Invalid password.';
  }
?>