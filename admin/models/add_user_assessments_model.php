<?php
session_start();



if(isset($_POST["submitForm"])) {
        //Get form data
        $student_assessment_id = mysqli_real_escape_string($connect, $_POST['student_assessment_id']);
        $id = mysqli_real_escape_string($connect, $_POST['user_id']);        
        $assessment_id = mysqli_real_escape_string($connect, $_POST['assessment_id']);
        $points_earned = mysqli_real_escape_string($connect, $_POST['points_earned']);        

        $query = "INSERT INTO cis282final.student_assessments
                (
                student_assessment_id,
                user_id,
                assessment_id,
                points_earned
                ) VALUES
                (
                '$student_assessment_id',
                '$id',
                '$assessment_id',
                '$points_earned'  
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