<?php
session_start();



if(isset($_POST["submitForm"])) {
        //Get form data
        $term_id = mysqli_real_escape_string($connect, $_POST['term_id']);
        $year = mysqli_real_escape_string($connect, $_POST['year']);        
        $semester = mysqli_real_escape_string($connect, $_POST['semester']);

        $query = "INSERT INTO cis282final.terms
                (
                term_id,
                year,
                semester
                ) VALUES
                (
                '$term_id',
                '$year',
                '$semester'  
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