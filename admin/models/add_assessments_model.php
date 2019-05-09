<?php
session_start();



if(isset($_POST["submitForm"])) {
        //Get form data
        $assessment_id = mysqli_real_escape_string($connect, $_POST['assessment_id']);
        $assessment_type_id = mysqli_real_escape_string($connect, $_POST['assessment_type_id']);        
        $description = mysqli_real_escape_string($connect, $_POST['description']);
        $points = mysqli_real_escape_string($connect, $_POST['points']);        

        $query = "INSERT INTO cis282final.assessments
                (
                assessment_id,
                assessment_type_id,
                description,
                points
                ) VALUES
                (
                '$assessment_id',
                '$assessment_type_id',
                '$description',
                '$points'  
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