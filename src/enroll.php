<?php 

include('include/config.php');

if(isset($_GET['CourseID'])){
    
    $CourseID = mysqli_real_escape_string($conn, $_GET['CourseID']);

    session_start();

    $userID = $_SESSION["UserID"];
    // echo $userID;
    //make sql
    $sql = "INSERT INTO courseenrollments (CourseID, UserId, Status)
    VALUES ('$CourseID', '$userID', 'enrolled')";

    //get query result
    // $result = mysqli_query($conn, $sql);

    // //fetchresult in array format
    // $course = mysqli_fetch_assoc($result);

    if(mysqli_query($conn, $sql)){
        // success
        header('Location: one-course.php?enrollment=true&CourseID='.$CourseID);
    } else{
        echo "<script type='text/javascript'>alert('Enrollment Unsuccessful')</script>";
    }


    //close connection
    mysqli_close($conn);

    
}


?>




