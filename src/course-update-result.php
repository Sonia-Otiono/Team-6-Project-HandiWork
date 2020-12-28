<?php

include('include/config.php');
include('include/header.php');

    if(isset($_POST['submit'])){
        $image = mysqli_real_escape_string($conn, $_POST['image']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);

        echo $image;
        echo $title;
        echo $description;
        echo $content;
        
        // $image = $_FILES['image']['name'];      
        
        // // create sql 
        // $squery = "UPDATE courses
        //            SET Title = $title, Image = $Image, Description = $description, Content = $content
        //            WHERE CourseID = $id";











         // prepare query for excecution
       // $feedbck = $conn->prepare($squery);


        // // posted values
        // $image = mysqli_real_escape_string($_POST['image']);
        // $title = mysqli_real_escape_string($conn, $_POST['title']);
        // $description = mysqli_real_escape_string($conn, $_POST['description']);
        // $content = mysqli_real_escape_string($conn, $_POST['content']);
 
        // // bind the parameters
        // $feedbck->bindParam(':Title', $name);
        // $feedbck->bindParam(':Description', $description);
        // $feedbck->bindParam(':price', $price);
        // $feedbck->bindParam(':CourseID', $id);
        //  echo $id;
        // // Execute the query
        // if($stmt->execute()){
        //     echo "<div class='alert alert-success'>Record was updated.</div>";
        // }else{
        //     echo "<div class='alert alert-danger'>Unable to update record. Please try again.</div>";
        // }
         
    }

?>
                <!-- // save to db and check
        //         if(mysqli_query($conn, $sql)){
        //             // success
        //            header('Location: update-course.php');
        //         } else {
        //             echo 'error: '. mysqli_error($conn);
        //   }
        
        
        }
        }
 ?> -->

<section>
      
</section>

<?php

    include('include/footer.php');

?>
