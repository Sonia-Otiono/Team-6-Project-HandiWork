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
                <div class="col s12 m6 l6">
                    <div class="card" style="min-width: 550px; min-height: 450px;">
                        <div class="card-image" style="min-width: 70px; min-height: 250px;">
                            <img src="Images/<?php echo $course['Image'];?>" height="450px">
                        </div>
                        <div class="card-content" style="min-width: 550px; min-height: 50px;">
                        <div class="card-title">
                        <h4 class="black-text"><?php echo $course['Title'];?></h4>
                        </div>
                            <h5><?php echo $course['Description'];?></h5>
                            <p><?php echo $course['Content'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>


<?php

include('include/footer.php');


?>

