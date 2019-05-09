<?php
session_start();



if(isset($_POST["submitForm"])) {
        //Get form data
        $time_id = mysqli_real_escape_string($connect, $_POST['time_id']);
        $days = mysqli_real_escape_string($connect, $_POST['days']);                
        $code = mysqli_real_escape_string($connect, $_POST['code']);        
        $start_time = mysqli_real_escape_string($connect, $_POST['start_time']);
        $minutes = mysqli_real_escape_string($connect, $_POST['minutes']);        

        $query = "INSERT INTO cis282final.times
                (
                time_id,
                code,
                days,
                start_time,
                minutes
                ) VALUES
                (
                '$time_id',
                '$code',
                '$days',
                '$start_time',
                '$minutes'  
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