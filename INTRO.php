<!DOCTYPE html>
<html>
  <head>
    <title>Form.site</title>
    <style>
    form {padding-top: 120px;
    text-align: center;
    font-size: 30px;}
    input{width: 250px;
      height: 40px;
      font-size: 30px}
    </style>
  </head>
<body>

<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'presenters';
$connection = mysqli_connect($host, $user, $pass, $db);
$projectNum = mysqli_real_escape_string($connection, $_REQUEST['projectnumber']);
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

$previousScore = "SELECT totalScore FROM table1 WHERE projectID = '$projectNum'";
  $query = mysqli_query($connection, $previousScore);
  $previousNum;
   if (mysqli_num_rows($query) > 0) {
       while($data = mysqli_fetch_assoc($query)) {
         $previousNum = $data['totalScore'];
       }
   } else {
     echo "0 results";
   }

  $judged = "SELECT timesJudged FROM table1 WHERE projectID = '$projectNum'";
  $result = mysqli_query($connection, $judged);
  $numJudges;
   if (mysqli_num_rows($result) > 0) {
       while($data = mysqli_fetch_assoc($result)) {
         $numJudges = $data['timesJudged'];
       }
   } else {
     echo "0 results";
   }

if ($_POST['engineering'] && (int)$numJudges < 3) {
    $num1 = $_REQUEST['designA'];
    $int1 = (int)$num1;

    $num2 = $_REQUEST['knowledge'];
    $int2 = (int)$num2;
  
    $num3 = $_REQUEST['designAP'];
    $int3 = (int)$num3;
  
    $num4 = $_REQUEST['prototype'];
    $int4 = (int)$num4;
  
    $num5 = $_REQUEST['evaluation'];
    $int5 = (int)$num5;

    $num6 = $_REQUEST['originality'];
    $int6 = (int)$num6;

    $num7 = $_REQUEST['presenQty'];
    $int7 = (int)$num7;

    $num8 = $_REQUEST['abstract'];
    $int8 = (int)$num8;

    $num9 = $_REQUEST['statement'];
    $int9 = (int)$num9;

    $num10 = $_REQUEST['solution'];
    $int10 = (int)$num10;

    $num11 = $_REQUEST['research'];
    $int11 = (int)$num11;

    $num12 = $_REQUEST['materials'];
    $int12 = (int)$num12;

    $num13 = $_REQUEST['pictures'];
    $int13 = (int)$num13;

    $num14 = $_REQUEST['results'];
    $int14 = (int)$num14;

    $num15 = $_REQUEST['conclusion'];
    $int15 = (int)$num15;

    $num16 = $_REQUEST['improvement'];
    $int16 = (int)$num16;

    $num17 = $_REQUEST['reference'];
    $int17 = (int)$num17;

    $num18 = $_REQUEST['visualD'];
    $int18 = (int)$num18;

    $totalscore = $int1 + $int2 + $int3 + $int4 + $int5 + $int6 + $int7 + $int8 + $int9 + $int10 + $int11 + $int12 + $int13 + $int14 + $int15 + $int16 + $int17 + $int18;
    $finalscore = (int)$previousNum + $totalscore;
    $totalJudges = (int)$numJudges + 1;
    
    $fs = "UPDATE table1 SET totalScore='$finalscore' WHERE projectID=$projectNum";
    $fj = "UPDATE table1 SET timesJudged='$totalJudges' WHERE projectID=$projectNum";
    
    if ($connection->query($fs) === TRUE) {
     echo "Record updated successfully ";
    } else {
     echo "Error updating record: " . $connection->error;
    }
    
    if ($connection->query($fj) === TRUE) {
     echo "Record updated successfully ";
    } else {
     echo "Error updating record: " . $connection->error;
    }
    
    $connection->close();


} else if ($_POST['experimental'] && (int)$numJudges < 3) {
    $num1 = $_REQUEST['sciApproach'];
    $int1 = (int)$num1;

    $num2 = $_REQUEST['knowledge'];
    $int2 = (int)$num2;
  
    $num3 = $_REQUEST['reliability'];
    $int3 = (int)$num3;
  
    $num4 = $_REQUEST['validity'];
    $int4 = (int)$num4;
  
    $num5 = $_REQUEST['originality'];
    $int5 = (int)$num5;

    $num6 = $_REQUEST['PresentQty'];
    $int6 = (int)$num6;

    $num7 = $_REQUEST['abstract'];
    $int7 = (int)$num7;

    $num8 = $_REQUEST['hypothesis'];
    $int8 = (int)$num8;

    $num9 = $_REQUEST['research'];
    $int9 = (int)$num9;

    $num10 = $_REQUEST['procedure'];
    $int10 = (int)$num10;

    $num11 = $_REQUEST['pictures'];
    $int11 = (int)$num11;

    $num12 = $_REQUEST['variables'];
    $int12 = (int)$num12;

    $num13 = $_REQUEST['data'];
    $int13 = (int)$num13;

    $num14 = $_REQUEST['analysis'];
    $int14 = (int)$num14;

    $num15 = $_REQUEST['conclusion'];
    $int15 = (int)$num15;

    $num16 = $_REQUEST['error'];
    $int16 = (int)$num16;

    $num17 = $_REQUEST['references'];
    $int17 = (int)$num17;

    $num18 = $_REQUEST['artistic'];
    $int18 = (int)$num18;

    $totalscore = $int1 + $int2 + $int3 + $int4 + $int5 + $int6 + $int7 + $int8 + $int9 + $int10 + $int11 + $int12 + $int13 + $int14 + $int15 + $int16 + $int17 + $int18;
    $finalscore = (int)$previousNum + $totalscore;
    $totalJudges = (int)$numJudges + 1;
    
    $fs = "UPDATE table1 SET totalScore='$finalscore' WHERE projectID=$projectNum";
    $fj = "UPDATE table1 SET timesJudged='$totalJudges' WHERE projectID=$projectNum";
    
    if ($connection->query($fs) === TRUE) {
     echo "Record updated successfully ";
    } else {
     echo "Error updating record: " . $connection->error;
    }
    
    if ($connection->query($fj) === TRUE) {
     echo "Record updated successfully ";
    } else {
     echo "Error updating record: " . $connection->error;
    }
    
    $connection->close();
}
?>

<form method="POST" action="Engineering.php" action>
  Project ID:<br>
  <input type="number" name="projectID" required>
  <br>
  Type Of Project: <br>
  <!--
    <select name="typeOfProject" required>
    <option selected hidden value="">Select Rubric</option>
    <option value="Experimental">Experimental</option>
    <option value="Engineering">Engineering</option>
    </select>
    <button type="submit">Submit</button>
  -->
    <button type="submit" formaction="Engineering.php">Submit to Engineering/Design page</button>
    <button type="submit" formaction="Experimental.php">Submit to Experimental page</button>
</form>

</body>
</html>
