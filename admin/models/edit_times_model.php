<?php

session_start();

// 
$mysqli = new mysqli('cis282final.cmf7bmopey0i.us-east-1.rds.amazonaws.com', 'dbest1', 'Going2win', 'cis282final') or die(mysqli_error($mysqli));

$update = false;
$time_id = 0;
$code = '';
$days = '';
$start_time = '';
$minutes = '';


if (isset($_GET['delete'])){
    $time_id = $_GET['delete'];
    $mysqli->query("DELETE FROM cis282final.times WHERE time_id = $time_id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: ../delete_times_success.php");
}

/*
Upon 'Edit' buttton selection from the users.php page, 
a query is made to retrieve the current user's field values and assign them to variables
*/
if (isset($_GET['edit'])){
    $time_id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM cis282final.times WHERE time_id = $time_id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        // NOTE: Data is coming from the database for the specific record 'id' and the field values are getting stored into variables
        $time_id = $row['time_id'];
        $code = $row['code'];
        $days = $row['days'];
        $start_time = $row['start_time'];
        $minutes = $row['minutes'];
    }
}
/*
Upon 'Update' buttton selection, retrieve the current user's field values and assign them to variables
*/

if (isset($_POST['update'])){
    $time_id = $_POST['time_id'];
    $code = $_POST['code'];
    $days = $_POST['days'];
    $start_time = $_POST['start_time'];
    $minutes = $_POST['minutes'];
    
    $mysqli->query("UPDATE cis282final.times
    
    SET time_id = '$time_id', 
    code = '$code',
    days = '$days',
    start_time = '$start_time',
    minutes = '$minutes'

    WHERE time_id = $time_id") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    
    header("location: ../edit_times_success.php");
}


// Close Connection
mysqli_close($connect); 

?>