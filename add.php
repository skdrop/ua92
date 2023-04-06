<?php
session_start();
include "sql.php";
if(isset($_GET["student"]))
{
  
if (isset($_POST['submit'])) {

  $FirstName = $_POST['FirstName'];
  $SurName = $_POST['SurName'];
  $Address = $_POST['Address'];
  $Email = $_POST['Email'];
  $Contact = $_POST['Contact'];
/*
mysqli_query() function accepts a string value
representing a query as one of the parameters
and, executes/performs the given query 
on the database
*/
  $sql = "INSERT INTO students (FirstName,SurName,Address,Email,Contact) VALUES ('$FirstName','$SurName','$Address','$Email','$Contact')";
  if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
    die();
  } else {
    echo "Error adding record ";
  }

}
echo '<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
    </head>
    <body>
        <div class="navbar">
            <a href="index.php">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="view.php?student">Student</a>
                    <a href="view.php?parents">Parent</a>
                    <a href="view.php?teacher">Teacher</a>
                    <a href="view.php?class">Class</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="add.php?student">Student</a>
                    <a href="add.php?parents">Parent</a>
                    <a href="add.php?teacher">Teacher</a>
                    <a href="add.php?class">Class</a>
                </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Delete
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a href="delete.php?student">Student</a>
                  <a href="delete.php?parents">Parent</a>
                  <a href="delete.php?teacher">Teacher</a>
                  <a href="delete.php?class">Class</a>
              </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="update.php?student">Student</a>
                <a href="update.php?parents">Parent</a>
                <a href="update.php?teacher">Teacher</a>
                <a href="update.php?class">Class</a>
            </div>
        </div>
            <a href="Contact.html">Contact Us</a>
        </div>

        <div>
        
      <h3>Add Students</h3>
            <br>
            <form method="post" action="add.php?student">

            <label for="studentName">Name:</label>
            <input type="text" name="FirstName">
            
            <label for="studentlName">Last Name:</label>
            <input type="text" name="SurName">
            <br><br>
            <label for="studentName">Address:</label>
            <input type="text" name="Address">
            
            <label for="studentlName">Email:</label>
            <input type="Email" name="Email">
  <br><br>
  <label for="studentlName">Phone Number:</label>
  <input type="tel" name="Contact" placeholder="07xxxxxxxx">
          
    			
    			
          
          
          
          
    			<br><br>

    			<input type="submit" name="submit">

    		</form>
        </div>
    </body>
</html>
';
      }

      else if(isset($_GET["parents"]))
      {

        if (isset($_POST['submit'])) {

          $FirstName = $_POST['FirstName'];
          $SurName = $_POST['SurName'];
          $Address = $_POST['Address'];
          $Email = $_POST['Email'];
          $Contact = $_POST['Contact'];
        /*
        mysqli_query() function accepts a string value
        representing a query as one of the parameters
        and, executes/performs the given query 
        on the database
        */
          $sql = "INSERT INTO parents (FirstName,SurName,Address,Email,Contact) VALUES ('$FirstName','$SurName','$Address','$Email','$Contact')";
          if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
            die();
          } else {
            echo "Error adding record ";
          }
        
        }
        echo '<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
    </head>
    <body>
        <div class="navbar">
            <a href="index.php">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="view.php?student">Student</a>
                    <a href="view.php?parents">Parent</a>
                    <a href="view.php?teacher">Teacher</a>
                    <a href="view.php?class">Class</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="add.php?student">Student</a>
                    <a href="add.php?parents">Parent</a>
                    <a href="add.php?teacher">Teacher</a>
                    <a href="add.php?class">Class</a>
                </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Delete
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a href="delete.php?student">Student</a>
                  <a href="delete.php?parents">Parent</a>
                  <a href="delete.php?teacher">Teacher</a>
                  <a href="delete.php?class">Class</a>
              </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="update.php?student">Student</a>
                <a href="update.php?parents">Parent</a>
                <a href="update.php?teacher">Teacher</a>
                <a href="update.php?class">Class</a>
            </div>
        </div>
            <a href="Contact.html">Contact Us</a>
        </div>

        <div>
        
      <h3>Add Parents</h3>
            <br>
            <form method="post" action="add.php?parents">

      
            <label for="studentName">Name:</label>
            <input type="text" name="FirstName">
            
            <label for="studentlName">Last Name:</label>
            <input type="text" name="SurName">
            <br><br>
            <label for="studentName">Address:</label>
            <input type="text" name="Address">
            
            <label for="studentlName">Email:</label>
            <input type="Email" name="Email">
  <br><br>
  <label for="studentlName">Phone Number:</label>
  <input type="tel" name="Contact" placeholder="07xxxxxxxx">
          
    			
          
          
          
          
    			<br><br>

    			<input type="submit" name="submit">

    		</form>
        </div>
    </body>
</html>
';
      }
      else if(isset($_GET["teacher"]))
      {

      
        if (isset($_POST['submit'])) {

          $FirstName = $_POST['FirstName'];
          $SurName = $_POST['SurName'];
          $Address = $_POST['Address'];
          $Email = $_POST['Email'];
          $Contact = $_POST['Contact'];
        /*
        mysqli_query() function accepts a string value
        representing a query as one of the parameters
        and, executes/performs the given query 
        on the database
        */
          $sql = "INSERT INTO teachers (FirstName,SurName,Address,Email,Contact) VALUES ('$FirstName','$SurName','$Address','$Email','$Contact')";
          if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
            die();
          } else {
            echo "Error adding record ";
          }
        
        }
        echo '<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
    </head>
    <body>
        <div class="navbar">
            <a href="index.php">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="view.php?student">Student</a>
                    <a href="view.php?parents">Parent</a>
                    <a href="view.php?teacher">Teacher</a>
                    <a href="view.php?class">Class</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="add.php?student">Student</a>
                    <a href="add.php?parents">Parent</a>
                    <a href="add.php?teacher">Teacher</a>
                    <a href="add.php?class">Class</a>
                </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Delete
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a href="delete.php?student">Student</a>
                  <a href="delete.php?parents">Parent</a>
                  <a href="delete.php?teacher">Teacher</a>
                  <a href="delete.php?class">Class</a>
              </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="update.php?student">Student</a>
                <a href="update.php?parents">Parent</a>
                <a href="update.php?teacher">Teacher</a>
                <a href="update.php?class">Class</a>
            </div>
        </div>
            <a href="Contact.html">Contact Us</a>
        </div>

        <div>
        
      <h3>Add Teachers</h3>
            <br>
            <form method="post" action="add.php?teacher">

    		
            <label for="studentName">Name:</label>
            <input type="text" name="FirstName">
            
            <label for="studentlName">Last Name:</label>
            <input type="text" name="SurName">
            <br><br>
            <label for="studentName">Address:</label>
            <input type="text" name="Address">
            
            <label for="studentlName">Email:</label>
            <input type="Email" name="Email">
  <br><br>
  <label for="studentlName">Phone Number:</label>
  <input type="tel" name="Contact" placeholder="07xxxxxxxx">
  <br><br>
    			<input type="submit" name="submit">

    		</form>
        </div>
    </body>
</html>
';
      }
      else if(isset($_GET["class"]))
      {
        
        if (isset($_POST['submit'])) {

          $ClassName = $_POST['ClassName'];
          $ClassCapacity = $_POST['ClassCapacity'];
        /*
        mysqli_query() function accepts a string value
        representing a query as one of the parameters
        and, executes/performs the given query 
        on the database
        */
          $sql = "INSERT INTO class (ClassName,ClassCapacity) VALUES ('$ClassName','$ClassCapacity')";
          if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
            die();
          } else {
            echo "Error adding record ";
          }
        
        }
			;echo '  <!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
    </head>
    <body>
        <div class="navbar">
            <a href="index.php">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="view.php?student">Student</a>
                    <a href="view.php?parents">Parent</a>
                    <a href="view.php?teacher">Teacher</a>
                    <a href="view.php?class">Class</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="add.php?student">Student</a>
                    <a href="add.php?parents">Parent</a>
                    <a href="add.php?teacher">Teacher</a>
                    <a href="add.php?class">Class</a>
                </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Delete
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a href="delete.php?student">Student</a>
                  <a href="delete.php?parents">Parent</a>
                  <a href="delete.php?teacher">Teacher</a>
                  <a href="delete.php?class">Class</a>
              </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="update.php?student">Student</a>
                <a href="update.php?parents">Parent</a>
                <a href="update.php?teacher">Teacher</a>
                <a href="update.php?class">Class</a>
            </div>
        </div>
            <a href="Contact.html">Contact Us</a>
        </div>

        <div>
        
      <h3>Add Class</h3>
            <br>
            <form method="post" action="add.php?class">

            <label for="studentName">Class name:</label>
            <input type="text" name="ClassName">
            <Br><Br>
            
            <label for="studentlName">Classcapacity:</label>
            <input type="text" name="ClassCapacity">
            <br><br>

    			<input type="submit" name="submit">

    		</form>
        </div>
    </body>
</html>
';
      }
      else {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Page Not Found', true, 403);
        die("<h1>404 Page Not Found</h1>");
      }
