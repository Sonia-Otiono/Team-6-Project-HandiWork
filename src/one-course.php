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

    echo "<script type='text/javascript'>alert('Enrollment Successful')</script>";


    
    // print_r($course);

?>

<section>
        <div class="container"><h2>Course Page</h2></div>
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l5">
                    <div class="card" style="min-width: 550px; height: 550px;">
                        <div class="card-image" style="min-width: 70px; height: 350px;">
                            <img src="Images/<?php echo $course['Image'];?>" height="340px">
                        </div>
                        <div class="card-content" style="min-width: 550px; height: 100px;">
                        <div class="card-title">
                        <h4 class="black-text"><?php echo $course['Title'];?></h4>
                        </div>
                            <h5><?php echo $course['Description'];?></h5>
                        </div>
                        <div class="card-action " style="min-width: 550px; height: 100px;">
                            <a href="enroll.php?CourseID=<?php echo $CourseID; ?>">Enroll</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 l5 offset-l2">
                    <h4>Content</h4>
                    <h5><?php echo $course['Content'];?></>
                </div>
            </div>
        </div>    
    </section>


<?php

include('include/footer.php');


?>

