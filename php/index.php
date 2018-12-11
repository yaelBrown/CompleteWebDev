<?php 
  echo "Hello World!";

  // $variableName
  $name = "Yael";

  // print variable
  echo $name;
  
  // declare array
  $myArray = array("a", "b", "c");
  
  // print array
  $print_r($myArray);
  
  // Get the size of array
  echo sizeof($myArray);

  // removes "b" from array 
  unset($myArray[1]);

  // family for-loops and printing for-loops
  $family = array("rob", "yael", "kirsten", "tommy", "Ralphie");

  for ($i = 0; $i < sizeof($family); $i++) {
      echo $family[$i]."<br>";
  }

  foreach ($family as $key => $value) {
      echo "Array item ".$key." is ".$value."<br>";
  }

  // GET variables
  print_r($_GET);

  // Variables are in the url (www.url.com/site/?variable=info&variable2=item)
  echo "Hi there ".$_GET['name']."!";
?>

<hmtl>
  <p>What's your name?</p>
    
  <form>
    <input name="name" type="text">
    <input type="submit" value="Go!">
  </form>
</hmtl>