<?php
include('include/config.php');

include('include/header.php');

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

        if (mysqli_num_rows($result_courseenrollment)==0) {
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

    
    // print_r($course);

?>

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