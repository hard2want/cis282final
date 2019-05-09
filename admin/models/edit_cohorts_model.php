<?php

session_start();

// 
$mysqli = new mysqli('cis282final.cmf7bmopey0i.us-east-1.rds.amazonaws.com', 'dbest1', 'Going2win', 'cis282final') or die(mysqli_error($mysqli));

$update = false;
$cohort_id = 0;
$course_id = 0;
$term_id = 0;
$time_id = 0;

if (isset($_GET['delete'])){
    $cohort_id = $_GET['delete'];
    $mysqli->query("DELETE FROM cis282final.cohorts WHERE cohort_id=$cohort_id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: ../delete_cohorts_success.php");
}

/*
Upon 'Edit' buttton selection from the users.php page, 
a query is made to retrieve the current user's field values and assign them to variables
*/
if (isset($_GET['edit'])){
    $cohort_id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM cis282final.cohorts WHERE cohort_id=$cohort_id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        // NOTE: Data is coming from the database for the specific record 'user_id' and the field values are getting stored into variables
        $cohort_id = $row['cohort_id'];
        $course_id = $row['course_id'];
        $term_id = $row['term_id'];
        $time_id = $row['time_id'];
    }
}
/*
Upon 'Update' buttton selection, retrieve the current user's field values and assign them to variables
*/

if (isset($_POST['update'])){
    $cohort_id = $_POST['cohort_id'];
    $course_id = $_POST['course_id'];
    $term_id = $_POST['term_id'];
    $time_id = $_POST['time_id'];
    
    $mysqli->query("UPDATE cis282final.cohorts
    
    SET cohort_id='$cohort_id', 
    course_id='$course_id',
    term_id='$term_id',
    time_id='$time_id'

    WHERE cohort_id=$cohort_id") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    
    header("location: ../edit_cohorts_success.php");
}


// Close Connection
mysqli_close($connect); 

?>