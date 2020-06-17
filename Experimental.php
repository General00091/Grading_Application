<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
      border: 2px solid black;
}
</style>
</head>
<body>

<h1 style="font-size:300%;">
<h1 style="text-align:center;">Judging Criteria - Experimental Projects</h1>   
<table style="width:100%">

<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'presenters';
$connection = mysqli_connect($host, $user, $pass, $db);
$ProjectID = mysqli_real_escape_string($connection, $_REQUEST['projectID']);
$ProjectID = $_REQUEST['projectID'];

echo("projectID: " . $ProjectID);
?>
<br>
<?php 
//get fname and lname and display
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
      }
    $sql = "SELECT fName, lName FROM table1 WHERE projectID = '$ProjectID'";
    $query = mysqli_query($connection, $sql);
    if (mysqli_num_rows($query) > 0) {
        while($row = mysqli_fetch_assoc($query)) {
            echo "Hello " . $row["fName"]. " " . $row["lName"]."!<br>";
        }
    } else {
      echo "0 results";
    }
    
    mysqli_close($connection);
?>

    <form method="POST" action="INTRO.php"> 
    <tr>
        <th>OVERALL IMPRESSION OF THE PROJECT \\ 50 POINTS</th>
        
    <tr>
        <td>Scientific Approach</td>
        <td> Well defined problem was solved using scientific principles. 
</td> 
<td>
		<input type="radio" name="sciApproach" value="0" required> 0<br>
        <td> 
		<input type="radio" name="sciApproach" value="1" required> 1<br>
        <td> 
		<input type="radio" name="sciApproach" value="2" required> 2<br>
        <td> 
        <input type="radio" name="sciApproach" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="sciApproach" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="sciApproach" value="5" required> 5<br>
        <td> 
		<input type="radio" name="sciApproach" value="6" required> 6<br>
        <td> 
		<input type="radio" name="sciApproach" value="7" required> 7<br>
 </td>

    </tr>
    <tr>
        <td>Knowledge Gained</td>
        <td>Student has understood the topic, mastered the scientific skills, and 
answered all questions correctly. 
</td>
        <td>
		<input type="radio" name="knowledge" value="0" required> 0<br>
        <td> 
		<input type="radio" name="knowledge" value="1" required> 1<br>
        <td> 
		<input type="radio" name="knowledge" value="2" required> 2<br>
        <td> 
        <input type="radio" name="knowledge" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="knowledge" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="knowledge" value="5" required> 5<br>
        <td> 
		<input type="radio" name="knowledge" value="6" required> 6<br>
        <td> 
		<input type="radio" name="knowledge" value="7" required> 7<br>
        <td> 
		<input type="radio" name="knowledge" value="8" required> 8<br>
        <td> 
		<input type="radio" name="knowledge" value="9" required> 9<br>
        <td> 
		<input type="radio" name="knowledge" value="10" required> 10<br>        
 </td>
    </tr>
    <tr>
    	<td>Reliability of Data</td>
        <td>Data is numerical and metric. Data is reliable with repeated trials.</td>
         <td>
		<input type="radio" name="reliability" value="0" required> 0<br>
        <td> 
		<input type="radio" name="reliability" value="1" required> 1<br>
        <td> 
		<input type="radio" name="reliability" value="2" required> 2<br>
        <td> 
        <input type="radio" name="reliability" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="reliability" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="reliability" value="5" required> 5<br>
        <td> 
		<input type="radio" name="reliability" value="6" required> 6<br>
        <td> 
		<input type="radio" name="reliability" value="7" required> 7<br>
        <td> 
		<input type="radio" name="reliability" value="8" required> 8<br>
        <td> 
		<input type="radio" name="reliability" value="9" required> 9<br>
        <td> 
		<input type="radio" name="reliability" value="10" required> 10<br>        
 </td>
    </tr>
    <tr>
    	<td>Validity of Conclusion</td>
        <td>Conclusion is consistent with the data provided.</td>
         <td>
		<input type="radio" name="validity" value="0" required> 0<br>
        <td> 
		<input type="radio" name="validity" value="1" required> 1<br>
        <td> 
		<input type="radio" name="validity" value="2" required> 2<br>
        <td> 
        <input type="radio" name="validity" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="validity" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="validity" value="5" required> 5<br>
        <td> 
		<input type="radio" name="validity" value="6" required> 6<br>
        <td> 
		<input type="radio" name="validity" value="7" required> 7<br>
        <td> 
        <input type="radio" name="validity" value="8" required> 8<br>
    </td>
    <tr>
    	<td>Originality</td>
        <td>Topic is original and method is highly creative.</td>
         <td>
		<input type="radio" name="originality" value="0" required> 0<br>
        <td> 
		<input type="radio" name="originality" value="1" required> 1<br>
        <td> 
		<input type="radio" name="originality" value="2" required> 2<br>
        <td> 
        <input type="radio" name="originality" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="originality" value="4" required> 4<br></td>
        <td> 
        <input type="radio" name="originality" value="5" required> 5<br>
    </td>
    </tr>
    <tr>
    	<td>Presentation Quality</td>
        <td>Speaks fluently with good eye contact, polite, dynamic, and interested in 
his/her subject. Not relied heavily on note cards or the board.</td>
<td>
		<input type="radio" name="PresentQty" value="0" required> 0<br>
        <td> 
		<input type="radio" name="PresentQty" value="1" required> 1<br>
        <td> 
		<input type="radio" name="PresentQty" value="2" required> 2<br>
        <td> 
        <input type="radio" name="PresentQty" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="PresentQty" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="PresentQty" value="5" required> 5<br>
        <td> 
		<input type="radio" name="PresentQty" value="6" required> 6<br>
        <td> 
		<input type="radio" name="PresentQty" value="7" required> 7<br>
        <td> 
		<input type="radio" name="PresentQty" value="8" required> 8<br>
        <td> 
		<input type="radio" name="PresentQty" value="9" required> 9<br>
        <td> 
		<input type="radio" name="PresentQty" value="10" required> 10<br>        
 </td>
    
</table>
<table style="width:100%">
    <tr>
        <th>DISPLAY \\ 50 POINTS</th>
    </tr>
    <tr>
    	<td>Abstract</td>
        <td>Summary of project containing: purpose, brief summary of procedure, and results.</td>
<td>
		<input type="radio" name="abstract" value="0" required> 0<br>
        <td> 
		<input type="radio" name="abstract" value="1" required> 1<br>
        <td> 
		<input type="radio" name="abstract" value="2" required> 2<br>
        <td> 
        <input type="radio" name="abstract" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="abstract" value="4" required> 4<br></td>
    <tr>
    	<td>Question and Hypothesis</td>
        <td>What you will answer by conducting the experiment. A prediction is made 
using an “if... then... because...” statement.</td>
<td>
		<input type="radio" name="hypothesis" value="0" required> 0<br>
        <td> 
		<input type="radio" name="hypothesis" value="1" required> 1<br>
        <td> 
		<input type="radio" name="hypothesis" value="2" required> 2<br>
        <td> 
        <input type="radio" name="hypothesis" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="hypothesis" value="4" required> 4<br></td>
    </tr>
    <tr>
    	<td>Background Research</td>
        <td>Thorough and connected to scientific concepts and vocabulary within the 
project. Minimum 1 page.</td>
<td>
		<input type="radio" name="research" value="0" required> 0<br>
        <td> 
		<input type="radio" name="research" value="1" required> 1<br>
        <td> 
		<input type="radio" name="research" value="2" required> 2<br>
        <td> 
        <input type="radio" name="research" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="research" value="4" required> 4<br></td>
    </tr>
    <tr>
    	<td>Material List and Procedure</td>
        <td>All materials are listed. Procedure is step by step format. Procedure clearly states what was done so another person could perform your experiment exactly.</td>
        <td>
		<input type="radio" name="procedure" value="0" required> 0<br>
        <td> 
		<input type="radio" name="procedure" value="1" required> 1<br>
        <td> 
		<input type="radio" name="procedure" value="2" required> 2<br>
        <td> 
        <input type="radio" name="procedure" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="procedure" value="4" required> 4<br></td>

    <tr>
    	<td>Pictures of Experiment</td>
        <td>Photos of the procedure being carried out are present. Photos were taken 
by student and are not copied from the internet. Photos do not show faces of people (faces may be covered)</td>
<td>
		<input type="radio" name="pictures" value="0" required> 0<br>
        <td> 
		<input type="radio" name="pictures" value="1" required> 1<br>
        <td> 
		<input type="radio" name="pictures" value="2" required> 2<br>
        <td> 
        <input type="radio" name="pictures" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="pictures" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="pictures" value="5" required> 5<br>
        </td>
    </tr>
     <tr>
    	<td>Variables</td>
        <td>Independent, dependent and controlled variables are clearly defined</td>
        <td>
		<input type="radio" name="variables" value="0" required> 0<br>
        <td> 
		<input type="radio" name="variables" value="1" required> 1<br>
        <td> 
		<input type="radio" name="variables" value="2" required> 2<br>
        <td> 
        <input type="radio" name="variables" value="3" required> 3<br></td>
    <tr>
    	<td>Data</td>
        <td>Data table and graph is presented including a title, units, labelled axis.</td>
        <td>
		<input type="radio" name="data" value="0" required> 0<br>
        <td> 
		<input type="radio" name="data" value="1" required> 1<br>
        <td> 
		<input type="radio" name="data" value="2" required> 2<br>
        <td> 
        <input type="radio" name="data" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="data" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="data" value="5" required> 5<br>
        </td>
    </tr>
    <tr>
    	<td>Analysis</td>
        <td>Written description of data collected.</td>
        <td>
		<input type="radio" name="analysis" value="0" required> 0<br>
        <td> 
		<input type="radio" name="analysis" value="1" required> 1<br>
        <td> 
		<input type="radio" name="analysis" value="2" required> 2<br>
        <td> 
        <input type="radio" name="analysis" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="analysis" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="analysis" value="5" required> 5<br>
        </td>
    </tr>
    <tr>
    	<td>Conclusion</td>
        <td>Purpose is restated. The original question is answered. The hypothesis is accepted or refuted.</td>
        <td>
		<input type="radio" name="conclusion" value="0" required> 0<br>
        <td> 
		<input type="radio" name="conclusion" value="1" required> 1<br>
        <td> 
		<input type="radio" name="conclusion" value="2" required> 2<br>
        <td> 
        <input type="radio" name="conclusion" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="conclusion" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="conclusion" value="5" required> 5<br>
        </td>
    <tr>
    	<td>Error Analysis</td>
        <td>Explain how data may not be perfectly accurate. How could accuracy be improved next time?</td>
        <td>
		<input type="radio" name="error" value="0" required> 0<br>
        <td> 
		<input type="radio" name="error" value="1" required> 1<br>
        <td> 
		<input type="radio" name="error" value="2" required> 2<br>
        <td> 
        <input type="radio" name="error" value="3" required> 3<br></td>
    </tr>
    <tr>
    	<td>Reference List</td>
        <td>Sources are listed (Not Google, Wikipedia or Science Buddies).</td>
        <td>
		<input type="radio" name="references" value="0" required> 0<br>
        <td> 
		<input type="radio" name="references" value="1" required> 1<br>
        <td> 
		<input type="radio" name="references" value="2" required> 2<br>
        <td> 
        <input type="radio" name="references" value="3" required> 3<br></td>
    </tr>
    <tr>
    	<td>Artistic Qualities</td>
        <td>Backboard is neat, organized, and appealing. No spelling errors.</td>
        <td>
		<input type="radio" name="artistic" value="0" required> 0<br>
        <td> 
		<input type="radio" name="artistic" value="1" required> 1<br>
        <td> 
		<input type="radio" name="artistic" value="2" required> 2<br>
        <td> 
        <input type="radio" name="artistic" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="artistic" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="artistic" value="5" required> 5<br>
        </td>
    </tr>

        <input type="hidden" name="projectnumber" value="<?php echo $ProjectID?>"> 
</table>
<br>
    <input type="submit" name="experimental" value="Submit"></form>

</body>
</html>
