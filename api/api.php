<?php

  $weather = "";
  $error = "";
  $apiKEY = "";

  if ($_GET['city']) {
    $urlContents = file_get_contents("apiURL".$_GET['city']."apiKEY");
    $weatherArray = json_decode($urlContents, true);
    print_r($weatherArray);
    
    
    
  }