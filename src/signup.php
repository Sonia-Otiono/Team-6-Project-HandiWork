<?php

include('include/config.php');


if(isset($_POST['submit'])){
$role = mysqli_real_escape_string($conn, $_POST['role']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);


  // create sql 
        $sql = "INSERT INTO users(Role, Username, Password, FirstName, LastName, Email) VALUES( '$role','$username','$password', '$firstname', '$lastname', '$email')";
        // save to db and check
        if(mysqli_query($conn, $sql)){
            // success
            header('Location: login.php');
        } else {
            echo 'error: '. mysqli_error($conn);
  }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href=" materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/font/material-icons.css">
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
    <section>
        <div class="navbar-fixed">
        <nav  class="red accent-4 white-text" role="navigation">

            <div class="nav-wrapper container">
                <a  href="#" class="brand-logo ">HandiWork</a>

                <a href="#"class="sidenav-trigger" data-target="links">
                <i class="material-icons">menu</i>
                </a>
                
                <ul class="right hide-on-med-and-down">
            
                    <li><a href="login.php">login</a></li>
                    <li><a href="signup.php">Sign up</a></li>
                    <li><a href="all-courses.php">Courses</a></li>
                    <li><a href="#">Go premium</a></li>


                </ul>
                    
                <ul class="sidenav" id="links">
            
                    <li><a href="#">login </a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Go premium</a></li>
        
                </ul>
                
            </div>
      </nav>
      </div> 
    </section>
       

<section>
        <div class="container" >
        <div class="col s12 l12">
     <form action="signup.php" method="post" enctype="multipart/form-data">
         <div class="row">
             <div class="input-field col s12 l6">
                 <input name="firstname" class="validate" type="text">
                  <label for="firstname">First name</label>
             </div>
             <div class="input-field col s12 l6">
                 <input name="lastname" class="validate" type="text">
                 <label for="lastname">Last name</label>
             </div>
         </div>
         <div class="input-field col s12 l12">
             <input name="email" class="validate" type="text">
             <label for="email">Email</label>
         </div>
         <div class="input-field col s12 l12">
         <input name="role" class="validate" type="text">
             <label for="role">Role</label>
         </div>
         <div class="input-field col s12 l12">
             <input name="username" class="validate" type="text">
             <label for="username">Username</label>
         </div>
         <div class="input-field col s12 l12">
             <input type="password">
             <label for="password">Create password</label>
         </div>
          <div class="input-field col s12 l12">  
             <input name="password" class="validate" type="password">
              <label for="password">Confirm password</label>
         </div>
         <input type="submit" name="submit" value="submit">
     </form>
 </div>
 </section> 
 



<!-- <section>
      <div class="container">
      <h4>Add New Course</h4><br>
      <div class="row">
        <form class="col s12 l12" action="signup.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="input-field col s12 l12">
              <input type="text" name="title" class="validate">
              <label for="title">Title</label>
            </div>
            <div class="input-field col s12 l12">
              <input type="text" name="description" class="validate">
              <label for="description">Description</label>
            </div>
            <div class="input-field col s12 l12">
              <input type="text" name="content" class="validate">
              <label for="content">Content</label>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <input type="file" name="image">
            </div>
          </div>
          <input type="submit" name="submit" value="submit">
        </form>
      </div>
      </div>
</section> -->
