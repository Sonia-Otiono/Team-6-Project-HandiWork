<?php

include('include/config.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/font/material-icons.css">
    <link rel="stylesheet" type="text/css" href="trainers.css">
    <link rel="stylesheet" type="text/css" href="handistyle.css">
</head>
<body class="grey lighten-4">
<header id="lp-header">
        <div class="navbar-fixed">
            <nav class="nav-wrapper white z-depth-0">
                <div class="container">
                    <a href="homepage.php" class="brand-logo red-text  z-depth-0 text-darken-1" style="font-weight: 500;">HandiWork</a>
                    <a href="#" class="sidenav-trigger" data-target="ham-menu">
                        <i class="material-icons red-text">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="all-courses.php" class="btn red darken-1 z-depth-0 btn-small main-nav" id="explore" style=" font-weight: 500;" >EXPLORE</a></li>
                        <li><input type="text" id="search" class="grey lighten-4 z-depth-0" placeholder="search for course">
                            <i class="material-icons red-text text-darken-1" id="search-icon">search</i>
                        </li>
                        <li><a href="trainers-dashb.php" class="btn red darken-1 dashb z-depth-0 main-nav" style="font-weight: 500;">Dashboard</a></li>
                    </ul>
        
                    <ul class="sidenav" id="ham-menu">
                        <li><a href="#" >Explore</a></li>
                        <li><a href="#" >LOG IN</a></li>
                        <li><a href="#" >SIGN UP</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

   <section class="picture">
       <div class="bottom-left">
           <h1>Welcome</h1>
       </div>
   </section>
   <h3><b>
       What We Offer</b>
   </h3>
   <h2>Aesthetics</h2>
   <section>
     <div class="column">
      <div class="card">
        <h5>Make up</h5>
        <img src="td-images/Make up.jpg" width="200px" height="200px"><br><br>
        <input type="button" name="log" id="log" value="View"></div>
    </div>
    <div class="column">
      <div class="card">
        <h5>Hair Weaving</h5>
        <img src="td-images/Hair weaving.jpg" width="200px" height="200px"><br><br>
        <input type="button" name="log" id="log" value="View"></div>
    </div>
    <div class="column">
      <div class="card">
        <h5>Interior Design</h5>
        <img src="td-images/Interior design.jpg" width="200px" height="200px"><br><br>
        <input type="button" name="log" id="log" value="View"></div>
    </div>

      </div>
      </section>
 

 <h2>Fashion</h2>
<section>
 <div class="row">
  <div class="column">
    <div class="card">
      <h5>Pattern Drafting</h5>
      <img src="td-images/pattern drafting.jpg" width="200px" height="200px"><br><br>
      <input type="button" name="log" id="log" value="View"></div>
  </div>
  

  <div class="column">
    <div class="card">
      <h5>Garment Making</h5>
      <img src="td-images/Fashion.jpg" width="200px" height="200px"><br><br>
      <input type="button" name="log" id="log" value="View"></div>
  </div>
  
     <div class="column">
       <div class="card">
           <h5>Skirts Making</h5>
           <img src="td-images/skirts.jpg" width="200px" height="200px"><br><br>
           <input type="button" name="log" id="log" value="View">
</div>
</div>
 </div>
</section>
<h2>Crafting</h2>
<section>
  <div class="column">
    <div class="card">
        <h5>Crochet</h5>
        <img src="td-images/Crochet.jpg" width="200px" height="200px"><br><br>
        <input type="button" name="log" id="log" value="View">
</div>
</div> 

<div class="column">
  <div class="card">
    <h5>Bead Making</h5>
    <img src="td-images/beads.jpg" width="200px" height="200px"><br><br>
    <input type="button" name="log" id="log" value="View"></div>
</div>
</div>
  
<div class="column">
  <div class="card">
    <h5>Shoe Making</h5>
    <img src="td-images/Shoe Making.jpg" width="200px" height="200px"><br><br>
    <input type="button" name="log" id="log" value="View"></div>
</div>
 </div>
</section>

<h2>Baking/Confectioneries</h2>
<section>
  <div class="column">
    <div class="card">
        <h5>Pie</h5>
        <img src="td-images/pie.jpg" width="200px" height="200px"><br><br>
        <input type="button" name="log" id="log" value="View">
</div>
</div> 

<div class="column">
  <div class="card">
    <h5>Cakes</h5>
    <img src="td-images/cakes.jpg" width="200px" height="200px"><br><br>
    <input type="button" name="log" id="log" value="View"></div>
</div>
</div>
  
<div class="column">
  <div class="card">
    <h5>Bread/Cookies</h5>
    <img src="td-images/baking.jpg" width="200px" height="200px"><br><br>
    <input type="button" name="log" id="log" value="View"></div>
</div>
 </div>
</section>
<section class="section2">
  <div class="row">
      <div class="column">
        <div class="card">
            <h5>ANNOUNCEMENTS</h5>
            <img src="td-images/announcements.jpg" width="200px" height="200px"><br><br>
            <input type="button" name="log" id="log" value="Click here"></div>
      </div>
      <div class="column">
        <div class="card">
          <h5>SESSIONS - 30 DAYS</h5>
          <img src="td-images/Learning.jpg" width="200px" height="200px"><br><br>
            <input type="button" name="log" id="log" value="Find out more"></div>
      </div>
      <div class="column">
        <div class="card">
          <h5>Messages</h5>
          <img src="td-images/messages.jpg" width="200px" height="200px"><br><br>
            <input type="button" name="log" id="log" value="Click here"></div>
      </div>
    </section>
    <section class="section2">
      <div class="row">
      <div class="column">
        <div class="card">
          <h5>ACTIVE USERS</h5>
          <img src="td-images/Running.jpg" width="200px" height="200px"><br><br>
            <input type="button" name="log" id="log" value="Click here"></div>
      </div>
    <div class="column">
      <div class="card">
        <h5>UPLOAD/UPDATE COURSE</h5>
        <img src="td-images/computer.jpg" width="200px" height="200px"><br><br>
            <input type="button" name="log" id="log" value="Click here"></div>
    </div>
    <div class="column">
      <div class="card">
        <h5>REGISTERED TRAINEES</h5>
        <img src="td-images/work.jpeg" width="200px" height="200px"><br><br>
        <input type="button" name="log" id="log" value="Click here"></div>
    </div>
</div>

<?php

include('include/footer.php')

?>
