<?php
include('include/config.php');


    if(isset($_GET['CourseID'])){
        $CourseID = mysqli_real_escape_string($conn, $_GET['CourseID']);

        session_start();

        $userID = $_SESSION["UserID"];

        //make sql
        $sql = "SELECT * FROM courses WHERE CourseID = $CourseID";

        $sql_courseenrollment = "SELECT * FROM courseenrollments WHERE CourseID = $CourseID AND UserId = $userID";
        //get query result
        $result = mysqli_query($conn, $sql);

        $result_courseenrollment = mysqli_query($conn, $sql_courseenrollment);

        //fetchresult in array format
        $course = mysqli_fetch_assoc($result);
        $courseenrollment = mysqli_fetch_assoc($result_courseenrollment);
       
        if (mysqli_num_rows($result_courseenrollment)==0) {
           $enrolled = false;
       }elseif($courseenrollment['Status']=='unenrolled'){
            $enrolled = false;
       }else{
           $enrolled = true;

       }
        //close connection
    mysqli_close($conn);

    }



    if(isset($_GET['enrollment'])){
        echo "<script type='text/javascript'>alert('Enrollment Successful')</script>";
    }
    if(isset($_GET['unenrolled'])){
        echo "<script type='text/javascript'>alert('Unenrollment Successful')</script>";
    }

    

?>

<?php


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

<section>
        <div class="container"><h2>Course Page</h2></div>
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l5" style="">
                    <div class="card" style="height:400px; width:500px;">
                        <div class="card-image">
                            <img src="Images/<?php echo $course['Image'];?>" >
                        </div>
                        <div class="card-content">
                        <div class="card-title">
                        <h4 class="black-text"><?php echo $course['Title'];?></h4>
                        </div>
                            <h5 style="font-size: 17px;"><?php echo $course['Description'];?></h5>
                        </div>
                        <div class="card-action">
                        <?php if($enrolled) : ?>
                            <a href="unenroll.php?CourseID=<?php echo $CourseID; ?>">Unenroll</a>
                        <?php else : ?>
                            <a href="enroll.php?CourseID=<?php echo $CourseID; ?>">Enroll</a>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col s12 l5 offset-l2 ">
                    <h4>Course Content</h4>
                    <h5 class="coursecontent" style="font-size: 17px;"><?php echo $course['Content'];?></h5>
                </div>
            </div>
        </div>    
    </section>


<?php

include('include/footer.php');


?>