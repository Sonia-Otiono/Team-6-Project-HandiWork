<?php
  include('config.php');
  session_start();
  $role = $_SESSION['Role'];
  $istrainer = false;
  if($role == "Trainer"){ $istrainer = true;}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HandiWork</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/font/material-icons.css">
    <link rel="stylesheet" type="text/css" href="handistyle.css">
</head>
<body class="grey lighten-4">
    <header id="lp-header">
        <div class="navbar-fixed">
            <nav class="nav-wrapper white z-depth-0">
                <div class="container">
                    <a href="homepage.php" class="brand-logo red-text text-darken-1" style="font-weight: 500;">HandiWork</a>
                    <a href="#" class="sidenav-trigger" data-target="ham-menu">
                        <i class="material-icons red-text">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="all-courses.php" class="btn red darken-1 z-depth-0 main-nav" id="explore" style=" font-weight: 500;" >EXPLORE</a></li>
                        <li><input type="text" id="search" class="grey lighten-4" placeholder="search for course">
                            <i class="material-icons red-text text-darken-1" id="search-icon">search</i>
                        </li>
                        <?php if($istrainer) : ?>
                          <li><a href="trainers-dashb.php" class="btn red darken-1 dashb z-depth-0 main-nav" style="font-weight: 500;">Dashboard</a></li>
                        <?php else : ?>
                          <li><a href="learners-dashb.php" class="btn red darken-1 dashb z-depth-0 main-nav" style="font-weight: 500;">Dashboard</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
        <ul class="sidenav" id="ham-menu">
            <li><a href="all-courses.php" >Explore</a></li>
            <?php if($istrainer) : ?>
              <li><a href="trainers-dashb.php">Dashboard</a></li>
            <?php else : ?>
              <li><a href="learners-dashb.php" >Dashboard</a></li>
            <?php endif; ?>
            <li><a href="#" >Log out</a></li>
        </ul>
    </header>