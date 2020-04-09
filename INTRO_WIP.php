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
 <!-- <?php
  //  $dbhost = 'localhost';
  //  $dbuser = 'grader';
  //  $dbpass = '';
   
  //  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
  //  if(! $conn ) {
  //     die('Could not connect: ' . mysql_error());
  //  }
   
  //  $sql = 'SELECT ProjectID, Rubric, FROM science board grader';
  //  mysql_select_db('test_db');
  //  $retval = mysql_query( $sql, $conn );
   
  //  if(! $retval ) {
  //     die('Could not get data: ' . mysql_error());
  //  }
   
  //  while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
  //     echo "Project ID :{$row['project_id']}  <br> ".
  //        "Rubric : {$row['rubric']} <br> ".
  //        "--------------------------------<br>";
  //  }
   
  //  echo "Fetched data successfully\n";
   
  //  mysql_close($conn);
?> -->
<form method="post" action="Design.php">
  Project ID:<br>
  <input type="number" name="projectID" id="projectID">
  <br>
  <select name="Type of Rubric">
    <option value="experimental">Experimental</option>
    <option value="engineering">Engineering</option>
    </select>
      <button type="submit">Submit</button> </form>
    
</form>

</body>
</html>
