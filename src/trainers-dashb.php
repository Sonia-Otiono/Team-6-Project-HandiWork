<?php

    include('include/config.php');

    include('include/header.php');

    $sql = "SELECT * FROM courses ORDER by DateCreated DESC";

    $result = mysqli_query($conn, $sql);
    
    $courses = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);  

?>



    <section>
        <div class="container ">
            <h4 class="td">Trainer's Dashboard</h4>
            <div class="row tdb">
                <div class="col s12 l1">
                </div>
                <div class="col s12 l4 profile grey lighten-1">
                    <h5>Profile</h5>
                    <ul>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            Name: John Doe
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            Qualififcation: Expert Craftsman
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            Work Experience: 15years
                        </li>
                    </ul>
                </div>
                <!-- <div class="col s12 l4 offset-l1 course grey lighten-1">
                    <h5>Courses</h5>
                    <ul>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="create-course.php" class="black-text">Create Course</a> 
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="update-course.php" class="black-text">Edit Course</a> 
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="delete-course.php" class="black-text">Delete Course</a> 
                        </li>
                    </ul>
                </div>
                <div class="col col-centre s12 l3">
                </div>
                <div class="col col-centre s12 l4 centre students grey lighten-1">
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
                </div> -->
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <h3 style="font-weight: 500;">Courses</h3>
            <div class="row">
                <div class="col s12 s6 cre8">
                    <h4>Create A New Course</h4>
                    <button class="btn yellow darken-3 z-depth-0"><a href="create-course.php" class="black-text">Create</a></button>
                </div>

                <?php foreach($courses as $course){ ?>
                <div class="col s12 m6 l4">
                <h4>Update/Delete Courses</h4>
                    <div class="card" style="min-width: 450px; min-height: 450px;">
                        <div class="card-image" style="min-width: 70px; min-height: 250px;">
                            <img src="Images/<?php echo $course['Image'];?>" style="height:450px;">
                        </div>
                        <div class="card-content" style="min-width: 450px; min-height: 50px;">
                        <div class="card-title">
                        <h4 class="black-text"><?php echo $course['Title'];?></h4>
                        </div>
                        <div class="card-action" min-width="550px">
                            <a href="update-course.php?CourseID=<?php echo $course['CourseID'] ?>">Update Course</a>
                            <a href="delete-course.php?CourseID=<?php echo $course['CourseID'] ?>">Delete Course</a>
                        </div>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>    
    </section>

    <!-- <section>
        <div class="container"><h4>Courses</h4></div>
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <div class="card">
                        <div class="card-image">
                            <img src="Images/<?php //echo $course['Image'];?>">
                        </div>
                        <div class="card-content">
                        <div class="card-title">
                        <h4 class="black-text"><?php //echo $course['Title'];?></h4>
                        </div>
                            <h5><?php //echo $course['Description'];?></h5>
                            <p><?php //echo $course['Content'];?></p>
                        </div>
                        <div class="card-action" min-width="550px">
                            <a href="update-course.php?CourseID=<?php //echo $course['CourseID'] ?>">Update Course</a>
                            <a href="delete-course.php?CourseID=<?php //echo $course['CourseID'] ?>">Delete Course</a>
                            <!-- <a href="<?php //echo $course['CourseID'] ?>">Download Course</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section> 

<?php 

include('include/footer.php'); 

?>