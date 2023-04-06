<?php

//mysqli_connect() function establishes a connection with MySQL server and returns the connection as an object.
/*
   $host = "localhost";
   $username  = "ronaldo";
   $passwd = " ";
   $dbname = "school";
*/
$link = mysqli_connect("localhost", "ronaldo", "Ronaldo4007", "ronaldo");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


/*
The isset() function checks whether a variable
 is set, which means that it has to be declared 
 and is not NULL. 
 This function returns true if the variable
  exists and is not NULL, 
  otherwise it returns false.
*/

?>