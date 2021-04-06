<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'grading application';
    $connection = mysqli_connect($host, $user, $pass, $db);
    $ProjectID = mysqli_real_escape_string($connection, $_REQUEST['projectID']);
    $ProjectID = $_REQUEST['projectID'];
    
    header('')
?>

