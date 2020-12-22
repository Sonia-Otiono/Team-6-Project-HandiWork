<?php

include('include/header.php');

include('include/config.php');


  // Delete a course
  $id = mysqli_real_escape_string($conn, $_GET['CourseID']);

  $sqli = "DELETE FROM courses WHERE CourseID = $id";

  if(mysqli_query($conn, $sqli)) {
      echo "<div class='alert alert-success'>Record was deleted.</div>";
  }else{
      echo "Error deleting course: " . mysqli_error($conn);

      mysqli_close($conn);

  }

?>







<?php

    include('include/footer.php');

?>