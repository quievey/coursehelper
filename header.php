<?php

include("connection.php");

$studentid = $_SESSION['studentid'];
$studentname = $_SESSION['name'];
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Course Helper</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
 
<link rel="stylesheet" type="text/css" href="pic/dist/css/picedit.min.css" />


  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Course<span class="logo_colour">Helper</span></a></h1>
          <h2>Simple Convenient Guide To Your Career.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="home.php">Home</a></li>
          <li><a href="subjectreg.php">Register Subjects</a></li>
		  <li ><a href="catt.php">Career Fields</a></li>
		  <li ><a href="uniss.php">Universities</a></li>
          <li ><a href="coursess.php">Courses</a></li>
		  <li ><a href="findcourse.php">Find Your Course</a></li>
		  <li ><a href="logout.php">Sign Out</a></li>
        </ul>
      </div>
    </div>