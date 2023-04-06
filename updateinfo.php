<?php
session_start();
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
      echo "Record Updating ";
      
echo'
<meta http-equiv="refresh" content="2;url=add.php?student" />';
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
    
        $sql = "DELETE FROM parents WHERE Parent_ID = $user ";
        if (mysqli_query($link, $sql)) {
          echo "Parent Updating ";
          
    echo'
    <meta http-equiv="refresh" content="2;url=add.php?parents" />';
          die();
        } else {
          echo "Error Deleting Parent ";
        }
      
    
}
else if(isset($_GET["ewfewf3445445"]))
{
    
$link = mysqli_connect("localhost", "ronaldo", "Ronaldo4007", "ronaldo");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


    $user=urldecode($link->real_escape_string($_GET["ewfewf3445445"]));

    $sql = "DELETE FROM teachers WHERE Teachers_ID = $user ";
    if (mysqli_query($link, $sql)) {
      echo "Teacher Updating ";
      
echo'
<meta http-equiv="refresh" content="2;url=add.php?teacher" />';
      die();
    } else {
      echo "Error Deleting Teacher ";
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
      echo "Class Updating ";
      
echo'
<meta http-equiv="refresh" content="2;url=add.php?class" />';
      die();
    } else {
      echo "Error Deleting Class ";
    }
  

      
    

}
else {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Page Not Found', true, 403);
    die("<h1>404 Page Not Found</h1>");
}