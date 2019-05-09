<?php

session_start();

// 
$mysqli = new mysqli('cis282final.cmf7bmopey0i.us-east-1.rds.amazonaws.com', 'dbest1', 'Going2win', 'cis282final') or die(mysqli_error($mysqli));

$update = false;
$assessment_type_id = 0;
$category = '';


if (isset($_GET['delete'])){
    $assessment_type_id = $_GET['delete'];
    $mysqli->query("DELETE FROM cis282final.assessment_types WHERE assessment_type_id = $assessment_type_id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: ../delete_assessment_types_success.php");
}

/*
Upon 'Edit' buttton selection from the users.php page, 
a query is made to retrieve the current user's field values and assign them to variables
*/
if (isset($_GET['edit'])){
    $assessment_type_id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM cis282final.assessment_types WHERE assessment_type_id = $assessment_type_id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        // NOTE: Data is coming from the database for the specific record 'id' and the field values are getting stored into variables
        $assessment_type_id = $row['assessment_type_id'];
        $category = $row['category'];
    }
}
/*
Upon 'Update' buttton selection, retrieve the current user's field values and assign them to variables
*/

if (isset($_POST['update'])){
    $assessment_type_id = $_POST['assessment_type_id'];
    $category = $_POST['category'];
    
    $mysqli->query("UPDATE cis282final.assessment_types
    
    SET assessment_type_id = '$assessment_type_id', 
    category = '$category'

    WHERE assessment_type_id = $assessment_type_id") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    
    header("location: ../edit_assessment_types_success.php");
}


// Close Connection
mysqli_close($connect); 

?>