<?php

session_start();

// 
$mysqli = new mysqli('cis282final.cmf7bmopey0i.us-east-1.rds.amazonaws.com', 'dbest1', 'Going2win', 'cis282final') or die(mysqli_error($mysqli));

$update = false;
$term_id = 0;
$year = '';
$semester = '';

if (isset($_GET['delete'])){
    $term_id = $_GET['delete'];
    $mysqli->query("DELETE FROM cis282final.terms WHERE term_id=$term_id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: ../delete_terms_success.php");
}

/*
Upon 'Edit' buttton selection from the users.php page, 
a query is made to retrieve the current user's field values and assign them to variables
*/
if (isset($_GET['edit'])){
    $term_id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM cis282final.terms WHERE term_id=$term_id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        // NOTE: Data is coming from the database for the specific record 'id' and the field values are getting stored into variables
        $term_id = $row['term_id'];
        $year = $row['year'];
        $semester = $row['semester'];
    }
}
/*
Upon 'Update' buttton selection, retrieve the current user's field values and assign them to variables
*/

if (isset($_POST['update'])){
    $term_id = $_POST['term_id'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    
    $mysqli->query("UPDATE cis282final.terms
    
    SET term_id = '$term_id', 
    year = '$year',
    semester = '$semester'

    WHERE term_id = $term_id") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    
    header("location: ../edit_terms_success.php");
}


// Close Connection
mysqli_close($connect); 

?>