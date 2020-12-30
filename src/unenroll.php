<?php 

include('include/config.php');

if(isset($_GET['CourseID'])){
    
    $CourseID = mysqli_real_escape_string($conn, $_GET['CourseID']);

    session_start();

    $userID = $_SESSION["UserID"];
    // echo $userID;
    //make sql
    $sql = "UPDATE courseenrollments
    SET CourseID = '$CourseID',  UserId = '$userID', Status = 'unenrolled'
    WHERE CourseID = $CourseID AND UserId = $userID";


}


    //get query result
    // $result = mysqli_query($conn, $sql);

    // //fetchresult in array format
    // $course = mysqli_fetch_assoc($result);

    if(mysqli_query($conn, $sql)){
        // success
        header('Location: one-course.php?unenrolled=true&CourseID='.$CourseID);
    } else{
        echo "<script type='text/javascript'>alert('Unenrollment Unsuccessful')</script>";
    }


    //close connection
    mysqli_close($conn);


?>