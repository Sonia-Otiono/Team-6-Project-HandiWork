<?php

    include('include/config.php');

    include('include/header.php');

?>

<body>
    <header id="lp-header">
        <div class="navbar-fixed">
            <nav class="nav-wrapper white">
                <div class="container">
                    <a href="#" class="brand-logo red-text text-darken-1" style="font-weight: 500;">HandiWork</a>
                    <a href="#" class="sidenav-trigger" data-target="ham-menu">
                        <i class="material-icons red-text">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#categories" class="btn red darken-1 btn-small main-nav" id="explore" style=" font-weight: 500;" >EXPLORE</a></li>
                        <li><input type="text" id="search" class="grey lighten-4" placeholder="search for course">
                            <i class="material-icons red-text text-darken-1" id="search-icon">search</i>
                        </li>
                        <li><a href="#login" class="btn red darken-1 main-nav" style=" font-weight: 500;" >User Name</a></li>
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

    <section>
        <div class="container ">
            <h4 class="td">Trainer's Dashboard</h4>
            <div class="row tdb">
                <div class="col s12 l1">
                </div>
                <div class="col s12 l4 profile teal lighten-3">
                    <h5>Profile</h5>
                    <ul>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            Name
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            Qualififcation
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            Work Experience
                        </li>
                    </ul>
                </div>
                <div class="col s12 l4 offset-l1 course teal lighten-3">
                    <h5>Courses</h5>
                    <ul>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            Active Courses
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="create-course.php" class="white-text">Create Course</a> 
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="update-course.php" class="white-text">Edit Course</a> 
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="u-course.php" class="white-text">Delete Course</a> 
                        </li>
                    </ul>
                </div>
                <div class="col col-centre s12 l3">
                </div>
                <div class="col col-centre s12 l4 centre students teal lighten-3">
                    <h5>students</h5>
                    <ul>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            Send Message
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            Students Progress
                        </li>
                    </ul>
                </div>
                <div class="col col-centre s12 l3">
                </div>
            </div>
        </div>
    </section>

<?php 

include('include/footer.php'); 

?>