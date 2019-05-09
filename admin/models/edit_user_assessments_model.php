<?php

session_start();

// 
$mysqli = new mysqli('cis282final.cmf7bmopey0i.us-east-1.rds.amazonaws.com', 'dbest1', 'Going2win', 'cis282final') or die(mysqli_error($mysqli));

$update = false;
$student_assessment_id = 0;
$user_id = 0;
$assessment_id = 0;
$points_earned = 0;

if (isset($_GET['delete'])){
    $student_assessment_id = $_GET['delete'];
    $mysqli->query("DELETE FROM cis282final.student_assessments WHERE student_assessment_id=$student_assessment_id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: ../delete_user_assessments_success.php");
}

/*
Upon 'Edit' buttton selection from the users.php page, 
a query is made to retrieve the current user's field values and assign them to variables
*/
if (isset($_GET['edit'])){
    $student_assessment_id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM cis282final.student_assessments WHERE student_assessment_id=$student_assessment_id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        // NOTE: Data is coming from the database for the specific record 'user_id' and the field values are getting stored into variables
        $student_assessment_id = $row['student_assessment_id'];
        $user_id = $row['user_id'];
        $assessment_id = $row['assessment_id'];
        $points_earned = $row['points_earned'];
    }
}
/*
Upon 'Update' buttton selection, retrieve the current user's field values and assign them to variables
*/

if (isset($_POST['update'])){
    $student_assessment_id = $_POST['student_assessment_id'];
    $user_id = $_POST['user_id'];
    $assessment_id = $_POST['assessment_id'];
    $points_earned = $_POST['points_earned'];
        
    $mysqli->query("UPDATE cis282final.student_assessments 
    
    SET student_assessment_id='$student_assessment_id', 
    user_id ='$user_id',
    assessment_id ='$assessment_id',
    points_earned ='$points_earned'

    WHERE student_assessment_id = $student_assessment_id") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    
    header("location: ../edit_user_assessments_success.php");
}


// Close Connection
mysqli_close($connect); 

?>