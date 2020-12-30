<?php

    include('include/config.php');

    include('include/header.php');

    $sql = "SELECT * FROM courses ORDER by DateCreated DESC";

    $result = mysqli_query($conn, $sql);
    
    $courses = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);  

?>


    <section>
        <div class="container"><h2>All Courses</h2></div>
        <div class="container">
            <div class="row">
                <?php foreach($courses as $course){ ?>
                <div class="col s12 m12 l4">
                    <div class="card" style="margin-bottom: 520px"> 
                        <div class="card-image">
                            <img src="Images/<?php echo $course['Image'];?>" width="250px" height="250px">
                        </div>
                        <div class="card-content">
                        <div class="card-title">
                        <h5 class="black-text"><?php echo $course['Title'];?></h5>
                        </div>
                            <!-- <h5><?php echo $course['Description'];?></h5> -->
                            <!-- <h5><?php //echo $course['Content'];?></h5> -->
                        </div>
                        <div class="card-action">
                            <a href="one-course.php?CourseID=<?php echo $course['CourseID'] ?>">VIEW</a>
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