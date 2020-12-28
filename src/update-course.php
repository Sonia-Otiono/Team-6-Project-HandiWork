<?php

include('include/config.php');
include('include/header.php');



if(isset($_POST['submit']))
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    //check if file selected by user
    if($_FILES['updatedimage']['error'] == UPLOAD_ERR_NO_FILE){
        echo "no file selected";
    }
    else
    {
        //get file name
        $image = $_FILES['updatedimage']['name'];
        //set file directory
        $target = "images/".basename($image);
        //if file upload is succesful update course
        if (move_uploaded_file($_FILES['updatedimage']['tmp_name'], $target)) 
        {
            $squery = "UPDATE courses
                    SET Title = '$title', Image = '$image', Description = '$description', Content = '$content'
                    WHERE CourseID = $id";
                    
            // save to db and check
            if(mysqli_query($conn, $squery))
            {
                echo "<div class='alert alert-success'><h5>Course was updated.</h5></div>";
            } 
            else
            {
                echo $squery;
            echo "<div class='alert alert-danger'>Unable to update record. Please try again.</div>";
            }
        }
        else{
            echo "<div class='alert alert-danger'>File upload not successful. Please try again.</div>";
        }
    }
}
else
    {
        $id= isset($_GET['CourseID']) ? $_GET['CourseID'] : die('ERROR: Record ID not found.');

        //prepare select query
        $squery = "SELECT * FROM courses WHERE CourseID = $id";
        $data = mysqli_query($conn, $squery);
        $course = mysqli_fetch_assoc($data);
        mysqli_close($conn);  

        // values to fill up our form
        $title = $course['Title'];
        $description = $course['Description'];
        $image = $course['Image'];
        $content = $course['Content'];
    }

   



?>

<section>
      <div class="container">
      <h4>Update Course</h4><br>
      <div class="row">
        <form class="col s12 l12" action="update-course.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="input-field col s12 l12">
              <input type="text" name="id" value="<?php echo $id?>" class="validate">
              <label for="courseid">Course ID</label>
            </div>
            <div class="input-field col s12 l12">
              <input type="text" name="title" value="<?php echo $title?>" class="validate">
              <label for="title">Title</label>
            </div>
            <div class="input-field col s12 l12">
              <input type="text" name="description" value="<?php echo $description?>" class="validate">
              <label for="description">Description</label>
            </div>
            <div class="input-field col s12 l12">
              <input type="text" name="content" value="<?php echo $content?>" class="validate">
              <label for="content">Content</label>
            </div>
            <img src="Images/<?php echo $image;?>" width="250px" height="250px">
          <div class="row">
            <div class="col s12">
              <input type="file" name="updatedimage">
            </div>
          </div>
          <input type="submit" name="submit" value="submit">
        </form>
      </div>
      </div>
</section>

<?php

    include('include/footer.php');

?>
