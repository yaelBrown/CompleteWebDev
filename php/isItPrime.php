<?php 
  if (is_numeric($value) && $value > 0 && $value == round($value,0)) {
    // Declare variables
    $i = 2;
    $isPrime = true;
    
    while ($i < $_GET['number']) {
      if ($_GET['number'] % $i == 0 ) {
        // number is not prime
        $isPrime = false;
      }
      $i++;
    }
      
    if ($isPrime) {
      echo "<p>".$i." is a prime number!</p>";
    } else {
      echo "<p>".$i." is not a prime number!</p>";
    }
      
  } else if($_GET) {
      // User has submitted something that is not a positive whole nubmer
      echo "Please enter a positive whole number."
  }
?>

<p>Please enter a whole number</p>

<form>
  <input name="number" type="text">
  <input type="submit" value="Go!">
</form>