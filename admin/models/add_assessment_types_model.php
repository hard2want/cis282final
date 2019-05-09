<?php
session_start();



if(isset($_POST["submitForm"])) {
        //Get form data
        $assessment_type_id = mysqli_real_escape_string($connect, $_POST['assessment_type_id']);
        $category = mysqli_real_escape_string($connect, $_POST['category']);        

        $query = "INSERT INTO cis282final.assessment_types
                (
                assessment_type_id,
                category
                ) VALUES
                (
                '$assessment_type_id',
                '$category'  
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