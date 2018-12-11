<?php 
  // Connect to Database
  mysqli_coonnect("serverName", "dbName", "password");
  $link = mysql_connect("localhost", "cl29-users-bzh", "YTTMcfhk.");

  // Display error 
  echo mysqli_connect_error();

  // Display to user the status
  if (mysqli_connect_error()) {
    echo "Error connecting to database";
  } else {
    echo "Successfully connected to database";
  }

  // Display message and terminate the connection if there is a error
  if (mysqli_connect_error()) {
    die("There was an error connecting to the database");
  };
  
  // Query a database
  $query = "SELECT * FROM users" // pulls all information from users db
  
  if ($result = mysqli_query($link, $query)) {
    echo "Query was successful<br>";
    
    $row = mysqli_fetch_array($result); // Saves data into variable
    print_r($row); // Actually prints fetched data onto screen
  };
  
  // Create a add user string
  $addTommy = "INSERT INTO `users` SET email = 'tommy@tommy.com' WHERE id = 1 LIMIT = 1";
  
  // Actually add user to db
  mysqli_query($link, $$addTommy);

  // Update a current user
  $updateTommy = "UPDATE `users` SET password = 'newPassword' WHERE email = 'tommy@tommy.com' LIMIT 1";

  // Display multiple rows of information
  if ($result = mysqli_query($link, $query)) {
    echo "Query was successful<br>";

    $row = mysqli_fetch_array($result); // Saves data into variable
      
    while ($row = mysql_fetch_array($result)) { // If true keeps collecting information
      print_r($row); // Actually prints fetched data onto screen
    };
  };

  // Add backslashes to when necessary when single quotes are used in data
  $name = "Rob O'Grady";

  $querySingleQuote = "SELECT `email` FROM users WHERE name = '".mysqli_real_escape_string($link, $name)."'";
    // can protect from sql injections
  
?>