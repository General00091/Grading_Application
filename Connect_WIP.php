<?php

/*$projectID = filter_input(INPUT_POST,'projectID');
$nameofjudge =filter_input(INPUT_POST,'nameofjudge');
$typeofrubric =filter_input(INPUT_POST, 'typeofrubric');
if (!empty($projectID)){
    if (!empty($nameofjudge)){
        $host = "localhost";
        $dbusername = "grader";
        $dbpassword = "Turkishmath201";
$dbname = "grader";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);



}
else{
    $sql ="INSERT INTO science board grader (projectID, typeofrubric)
    values ('$projectID', '$typeofrubric')";
    if ($conn->query($sql)){
        echo "New record is inserted sucessfully";
    }
    else {
        echo "Error: ". $sql ."<br>". $conn->error;
    }
$conn->close(); 
}

    }
else{
    echo "Name of Judge should not be empty";
    die();
}
}
else{
    echo "Project ID should not be empty"; 
    die();

}
*/
?>