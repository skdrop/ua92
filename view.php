<?php
session_start();
if(isset($_GET["student"]))
{
echo '<html>
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

';


$link = mysqli_connect("localhost", "ronaldo", "Ronaldo4007", "ronaldo");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
;echo '
<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="150px">Student ID<br><hr></th>
				<th width="250px">First Name<br><hr></th>
                <th width="250px">Last Name<br><hr></th>
                <th width="250px">Address<br><hr></th>
                <th width="250px">Email<br><hr></th>
                <th width="250px">Phone number<br><hr></th>
	
			</tr>
				
			';
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT Student_ID,FirstName, SurName,Address, Email,Contact  FROM students");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
      <th>{$row['Student_ID']}</th>
      <th>{$row['FirstName']}</th>
      <th>{$row['SurName']}</th>
              <th>{$row['Address']}</th>
              <th>{$row['Email']}</th>
              <th>{$row['Contact']}</th>
			</tr>";
			}
			;echo '            </table>
        </body>
        </html>


';
    }
    else if(isset($_GET["parents"]))
    {
      echo '<html>
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
      
      ';
      
      
      
$link = mysqli_connect("localhost", "ronaldo", "Ronaldo4007", "ronaldo");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
;echo '
      <h3>See all Parents</h3>
        
          <table>
          
            <tr>
              <th width="150px">Parents ID<br><hr></th>
              <th width="250px">First Name<br><hr></th>
              <th width="250px">Last Name<br><hr></th>
              <th width="250px">Address<br><hr></th>
              <th width="250px">Email<br><hr></th>
              <th width="250px">Phone number<br><hr></th>

    </tr>
              
            ';
            /* 	function fetches a result row as an associative array.
                    Note: Fieldnames returned from 
              this function are case-sensitive.
            */	
          
			$sql = mysqli_query($link, "SELECT Parent_ID,FirstName, SurName,Address, Email,Contact  FROM parents");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
      <th>{$row['Parent_ID']}</th>
      <th>{$row['FirstName']}</th>
      <th>{$row['SurName']}</th>
              <th>{$row['Address']}</th>
              <th>{$row['Email']}</th>
              <th>{$row['Contact']}</th>
			</tr>";
			}
			;echo '            </table>
              </body>
              </html>
      
      
      ';
    }
    else if(isset($_GET["teacher"]))
    {
      echo '<html>
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
      
      ';
      
      $link = mysqli_connect("localhost", "ronaldo", "Ronaldo4007", "ronaldo");
      // Check connection
      if ($link === false) {
          die("Connection failed: ");
      }
      ;echo '
      <h3>See all Teachers</h3>
        
          <table>
          
            <tr>
              <th width="150px">Teachers ID<br><hr></th>
            	<th width="250px">First Name<br><hr></th>
                <th width="250px">Last Name<br><hr></th>
                <th width="250px">Address<br><hr></th>
                <th width="250px">Email<br><hr></th>
                <th width="250px">Phone number<br><hr></th>
	
	    </tr>
              
            ';
            /* 	function fetches a result row as an associative array.
                    Note: Fieldnames returned from 
              this function are case-sensitive.
            */	
			$sql = mysqli_query($link, "SELECT Teachers_ID,FirstName, SurName,Address, Email,Contact  FROM teachers");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
      <th>{$row['Teachers_ID']}</th>
      <th>{$row['FirstName']}</th>
      <th>{$row['SurName']}</th>
              <th>{$row['Address']}</th>
              <th>{$row['Email']}</th>
              <th>{$row['Contact']}</th>
			</tr>";
			}
			;echo '      
              </table>
              </body>
              </html>
      
      
      ';
    }
    else if(isset($_GET["class"]))
    {
      echo '<html>
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
      
      ';
      
      $link = mysqli_connect("localhost", "ronaldo", "Ronaldo4007", "ronaldo");
      // Check connection
      if ($link === false) {
          die("Connection failed: ");
      }
      ;echo '
      <h3>See all Class</h3>
        
          <table>
          
            <tr>
              <th width="150px">Class ID<br><hr></th>
              <th width="250px">Class Name<br><hr></th>
                      <th width="250px">Class Capacity<br><hr></th>
            </tr>
              
            ';
            /* 	function fetches a result row as an associative array.
                    Note: Fieldnames returned from 
              this function are case-sensitive.
            */	
			$sql = mysqli_query($link, "SELECT Class_ID,ClassName,ClassCapacity  FROM class");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
      <th>{$row['Class_ID']}</th>
      <th>{$row['ClassName']}</th>
      <th>{$row['ClassCapacity']}</th>
			</tr>";
			}
			;echo '           </table>
              </body>
              </html>
      
      
      ';
    }
    else {
      header($_SERVER['SERVER_PROTOCOL'] . ' 404 Page Not Found', true, 403);
      die("<h1>404 Page Not Found</h1>");
    }