<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'grading application';
    $connection = mysqli_connect($host, $user, $pass, $db);
    $ProjectID = mysqli_real_escape_string($connection, $_REQUEST['projectID']);
    $ProjectID = $_REQUEST['projectID'];
    
    echo("projectID: " . $ProjectID);
        
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
      }
    $sql = "SELECT typeOfProject FROM presenters WHERE projectID = '$ProjectID'";
    $query = mysqli_query($connection, $sql);
    if (mysqli_num_rows($query) > 0) {
        while($row = mysqli_fetch_assoc($query)) {
            echo "<br>Hello " . $row["typeOfProject"]."!<br>";
        }
    } else {
      echo "Number not assigned\n";
    }
    
    mysqli_close($connection);

    header('')
?>

