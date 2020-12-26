<?php 

include('include/config.php');

if(isset($_GET['CourseID'])){
    
    $CourseID = mysqli_real_escape_string($conn, $_GET['CourseID']);

    $username = $_SESSION["username"];

    //make sql
    $sql = "INSERT INTO courseenrollments (CourseID, UserId, Status)
    VALUES ('$CourseID', '$username', 'enrolled')";

    //get query result
    $result = mysqli_query($conn, $sql);

    //fetchresult in array format
    $course = mysqli_fetch_assoc($result);

    //close connection
    mysqli_close($conn);

    header('Location: one-course.php?CourseID='.$CourseID);

    echo "<script type='text/javascript'>alert('Enrollment Successful')</script>";

}


?>




