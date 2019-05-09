<?php

session_start();

// 
$mysqli = new mysqli('cis282final.cmf7bmopey0i.us-east-1.rds.amazonaws.com', 'dbest1', 'Going2win', 'cis282final') or die(mysqli_error($mysqli));

$update = false;
$course_id = 0;
$department = '';
$number = '';
$description = '';


if (isset($_GET['delete'])){
    $course_id = $_GET['delete'];
    $mysqli->query("DELETE FROM cis282final.courses WHERE course_id=$course_id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: ../delete_courses_success.php");
}

/*
Upon 'Edit' buttton selection from the users.php page, 
a query is made to retrieve the current user's field values and assign them to variables
*/
if (isset($_GET['edit'])){
    $course_id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM cis282final.courses WHERE course_id=$course_id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        // NOTE: Data is coming from the database for the specific record 'id' and the field values are getting stored into variables
        $course_id = $row['course_id'];
        $department = $row['department'];
        $number = $row['number'];
        $description = $row['description'];
    }
}
/*
Upon 'Update' buttton selection, retrieve the current user's field values and assign them to variables
*/

if (isset($_POST['update'])){
    $course_id = $_POST['course_id'];
    $department = $_POST['department'];
    $number = $_POST['number'];
    $description = $_POST['description'];
    
    $mysqli->query("UPDATE cis282final.courses
    
    SET course_id='$course_id', 
    department='$department',
    number='$number',
    description='$description'

    WHERE course_id=$course_id") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    
    header("location: ../edit_courses_success.php");
}


// Close Connection
mysqli_close($connect); 

?>