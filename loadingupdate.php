<?php
session_start();
echo'
<meta http-equiv="refresh" content="2">';
if(isset($_GET["eoiwcjoiwmcowiecwec"]))
{
    
$link = mysqli_connect("localhost", "ronaldo", "Ronaldo4007", "ronaldo");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


    $user=urldecode($link->real_escape_string($_GET["eoiwcjoiwmcowiecwec"]));

    $sql = "DELETE FROM students WHERE Student_ID = $user ";
    if (mysqli_query($link, $sql)) {
      echo "Record deleted successfully";
      die();
    } else {
      echo "Error Deleting record ";
    }
  

      
    

}
else if(isset($_GET["4w8948fjifwefwef"]))
{
    
$link = mysqli_connect("localhost", "ronaldo", "Ronaldo4007", "ronaldo");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


    $user=urldecode($link->real_escape_string($_GET["4w8948fjifwefwef"]));


      
    

}
else if(isset($_GET["4w8948fjifwefwef"]))
{
    
$link = mysqli_connect("localhost", "ronaldo", "Ronaldo4007", "ronaldo");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


    $user=urldecode($link->real_escape_string($_GET["4w8948fjifwefwef"]));

    $sql = "DELETE FROM parents WHERE Parent_ID = $user ";
    if (mysqli_query($link, $sql)) {
      echo "Parent deleted successfully";
      die();
    } else {
      echo "Error Deleting parent ";
    }
  

      
    

}
else if(isset($_GET["knug787g8fttyrr"]))
{
    
$link = mysqli_connect("localhost", "ronaldo", "Ronaldo4007", "ronaldo");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


    $user=urldecode($link->real_escape_string($_GET["knug787g8fttyrr"]));

    $sql = "DELETE FROM class WHERE Class_ID = $user ";
    if (mysqli_query($link, $sql)) {
      echo "Class deleted successfully";
      die();
    } else {
      echo "Error Deleting Class ";
    }
  

      
    

}
else {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Page Not Found', true, 403);
    die("<h1>404 Page Not Found</h1>");
}