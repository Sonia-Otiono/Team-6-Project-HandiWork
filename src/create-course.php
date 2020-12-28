<?php

include('include/config.php');
include('include/header.php');


if(isset($_POST['submit'])){
$image = mysqli_real_escape_string($conn, $_POST['image']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$content = mysqli_real_escape_string($conn, $_POST['content']);


//image
$image = $_FILES['image']['name'];

//image file directory
$target = "images/".basename($image);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

  // create sql 
        $sql = "INSERT INTO courses(Image, Title, Description, Content) VALUES( '$image','$title','$description','$content')";

        // save to db and check
        if(mysqli_query($conn, $sql)){
            // success
            header('Location: all-courses.php');
        } else {
            echo 'error: '. mysqli_error($conn);
  }


}
}

?>


<section >
      <div class="container">
      <h4>Add New Course</h4><br>
      <div class="row">
        <form class="col s12 l12" class="create-sec" action="create-course.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="input-field col s12 l12">
              <input type="text" name="title" class="validate">
              <label for="title">Title</label>
            </div>
            <div class="input-field col s12 l12">
              <input type="text" name="description" class="validate">
              <label for="description">Description</label>
            </div>
            <div class="input-field col s12 l12">
              <input type="text" name="content" class="validate">
              <label for="content">Content</label>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <input type="file" name="image">
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