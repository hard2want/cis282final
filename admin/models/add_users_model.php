<?php
session_start();



if(isset($_POST["submitForm"])) {
        //Get form data
        $user_id = mysqli_real_escape_string($connect, $_POST['id']);
        $cohort_id = mysqli_real_escape_string($connect, $_POST['cohort_id']);
        $first_name = mysqli_real_escape_string($connect, $_POST['first_name']);        
        $last_name = mysqli_real_escape_string($connect, $_POST['last_name']); 
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);        
        $phone = mysqli_real_escape_string($connect, $_POST['phone']);        

        $query = "INSERT INTO cis282final.users
                (
                id,
                cohort_id,
                first_name,
                last_name,
                email,
                password,
                phone
                ) VALUES
                (
                '$user_id',
                '$cohort_id',
                '$first_name',
                '$last_name',
                '$email',
                '$password',
                '$phone'    
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