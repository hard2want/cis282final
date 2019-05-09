<?php
/* Database connection settings */
$dbhost = 'cis282final.cmf7bmopey0i.us-east-1.rds.amazonaws.com'; // found via your RDS
$dbuser = 'dbest1'; // your mySQL workbench user name
$dbpass = 'Going2win'; // password from mySQL workbench
$dbname = 'cis282final'; // your database name
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($mysqli->error);
?>
