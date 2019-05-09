<?php
session_start();



if(isset($_POST["submitForm"])) {
        //Get form data
        $cohort_id = mysqli_real_escape_string($connect, $_POST['cohort_id']);
        $course_id = mysqli_real_escape_string($connect, $_POST['course_id']);        
        $term_id = mysqli_real_escape_string($connect, $_POST['term_id']);
        $time_id = mysqli_real_escape_string($connect, $_POST['time_id']);        

        $query = "INSERT INTO cis282final.cohorts
                (
                cohort_id,
                course_id,
                term_id,
                time_id
                ) VALUES
                (
                '$cohort_id',
                '$course_id',
                '$term_id',
                '$time_id'  
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