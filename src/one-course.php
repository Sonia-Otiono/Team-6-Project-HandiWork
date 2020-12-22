<?php
include('include/config.php');

include('include/header.php');

    if(isset($_GET['CourseID'])){
        $CourseID = mysqli_real_escape_string($conn, $_GET['CourseID']);

        //make sql
        $sql = "SELECT * FROM courses WHERE CourseID = $CourseID";

        //get query result
        $result = mysqli_query($conn, $sql);

        //fetchresult in array format
        $course = mysqli_fetch_assoc($result);

        //close connection
    mysqli_close($conn);

    }

    

    
    // print_r($course);

?>

<section>
        <div class="container"><h2>Course Page</h2></div>
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="Images/<?php echo $course['Image'];?>" width="250px" height="250px">
                        </div>
                        <div class="card-content">
                        <div class="card-title">
                        <h4 class="black-text"><?php echo $course['Title'];?></h4>
                        </div>
                            <h5><?php echo $course['Description'];?></h5>
                            <p><?php echo $course['Content'];?></p>
                        </div>
                        <div class="card-action">
                            <a href="update-course.php?CourseID=<?php echo $course['CourseID'] ?>">Update Course</a>
                            <a href="delete-course.php?CourseID=<?php echo $course['CourseID'] ?>">Delete Course</a>
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

