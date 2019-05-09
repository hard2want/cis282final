<?php
session_start();



if(isset($_POST["submitForm"])) {
        //Get form data
        $course_id = mysqli_real_escape_string($connect, $_POST['course_id']);
        $department = mysqli_real_escape_string($connect, $_POST['department']);        
        $number = mysqli_real_escape_string($connect, $_POST['number']);
        $description = mysqli_real_escape_string($connect, $_POST['description']);        

        $query = "INSERT INTO cis282final.courses
                (
                course_id,
                department,
                number,
                description
                ) VALUES
                (
                '$course_id',
                '$department',
                '$number',
                '$description'  
                )
        ";

        if (mysqli_query($connect, $query)) {
  
          $_SESSION['message'] = "Record has been saved!";
          $_SESSION['msg_type'] = "success";  
        }
        else {
          $_SESSION['message'] = "An Error occurred while Saving. " . mysqli_error($connect);
          $_SESSION['msg_type'] = "danger";
        }

    }        

// Close Connection
mysqli_close($connect); 

?>