<?php

    include('include/config.php');

    include('include/header.php');

    $sql = "SELECT * FROM courses ORDER by DateCreated DESC";

    $result = mysqli_query($conn, $sql);
    
    $courses = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);  

?>



    <!-- <section>
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
            </div>
        </div>
    </section> -->

    <section>
        <div class="container ">
            <h4 class="td">Trainer's Dashboard</h4>
            <div class="row tdb">
                <div class="col s12 m6 l6">
                  <ul class="collection">
                    <li class="collection-item avatar">
                        <img src="Images/TP2.jpg" alt="" class="circle">
                      <span class="title">Thomas Lit</span>
                     <p>Fashion Illustrator</p>
                     <p>Work Experience: 15years</p>
                     <hr>
            <div class="">
                <h4 class="bio">Bio</h4>
                <p>Thomas is Fashion Illustrator at the Handiwork Fashion Institute (HFI), working to nurture productive relationships between industry and academia. Thomas, has a wide experience in the fashion industry. Passionate about making fashion illustration training accessible for all, Thomas has developed and taught a wide range of fashion illustration classes through different fashion institutes
            </div>
    </section>

    <section>
        <div class="container">
            <h3 style="font-weight: 500;">Courses</h3>
            <div class="row">
                <div class="col s12 l12 cre8">
                    <h4>Create A New Course</h4>
                    <button class="btn yellow darken-3 z-depth-0"><a href="create-course.php" class="black-text">Create</a></button>
                </div>

                <div class="col s12 m6 l3">
                <h4>Update/Delete Courses</h4>
                <?php foreach($courses as $course){ ?>
                    <div class="card" style="min-width: 450px; min-height: 450px;">
                        <div class="card-image" style="min-width: 70px; min-height: 250px;">
                            <img src="Images/<?php echo $course['Image'];?>" style="height:450px;">
                        </div>
                        <div class="card-content" style="min-width: 450px; min-height: 50px;">
                        <div class="card-title">
                        <h5 class="black-text"><?php echo $course['Title'];?></h5>
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

    

<?php 

include('include/footer.php'); 

?>