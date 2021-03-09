<!DOCTYPE html>
<html>
<head>
<style>
body {
        font-family: Arial, sans-serif;
        background-color: white; 
    }
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 8px;
    border: 1px solid #6E968E;
}

tr:nth-child(even){background-color: #B8DDD6}
tr:hover {background-color: #6CBCAD;}

th {
    background-color: #275070;
    color: whitesmoke;
    text-align: center;
    padding-top: 12px;
    padding-bottom: 12px;
}

</style>
</head>
<body>

<h1 style="font-size:300%;">
<h1 style="text-align:center;">Judging Criteria - Experimental Project</h1>   
<table style="width:100%">

<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'grading application';
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
    $sql = "SELECT fName, lName FROM presenters WHERE projectID = '$ProjectID'";
    $query = mysqli_query($connection, $sql);
    if (mysqli_num_rows($query) > 0) {
        while($row = mysqli_fetch_assoc($query)) {
            echo "Hello " . $row["fName"]. " " . $row["lName"]."!<br>";
        }
    } else {
      echo "Number not assigned\n";
    }
    
    mysqli_close($connection);
?>
    
    <form method="POST" action="INTRO.php"> 
    <tr>
        <th>OVERALL IMPRESSION OF THE PROJECT \\ 50 POINTS</th>
    </tr>
    <tr>
        <td>Scientific Approach</td>
        <td> Well defined problem was solved using scientific principles. 
</td> 
<td>
    <select name="sciApproach">  <!--should i place required new to name?-->
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
    </select>
</td>

    </tr>
    <tr>
        <td>Knowledge Gained</td>
        <td>Student has understood the topic, mastered the scientific skills, and 
answered all questions correctly. 
</td>
    <select name="knowledge">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>        
 </td>
    </tr>
    <tr>
    	<td>Reliability of Data</td>
        <td>Data is numerical and metric. Data is reliable with repeated trials.</td>
<td>
    <select name="reliability">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>        
 </td>
    </tr>
    <tr>
    	<td>Validity of Conclusion</td>
        <td>Conclusion is consistent with the data provided.</td>
<td>
    <select name="validity">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
    </select>
    </td>
    <tr>
    	<td>Originality</td>
        <td>Topic is original and method is highly creative.</td>
<td>
	<select name="originality">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
	</select>
</td>
    </tr>
    <tr>
    	<td>Presentation Quality</td>
        <td>Speaks fluently with good eye contact, polite, dynamic, and interested in 
his/her subject. Not relied heavily on note cards or the board.</td>
<td>
	<select name="PresentQty">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>        
 </td>
    
</table>
<br>
<table style="width:100%">
    <tr>
        <th>DISPLAY \\ 50 POINTS</th>
    </tr>
    <tr>
    	<td>Abstract</td>
        <td>Summary of project containing: purpose, brief summary of procedure, and results.</td>
<td>
    <select name="abstract">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
</td>
    </tr>
    <tr>
    	<td>Question and Hypothesis</td>
        <td>What you will answer by conducting the experiment. A prediction is made 
using an “if... then... because...” statement.</td>
<td>
    <select name="hypothesis">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
</td>
    </tr>
    <tr>
    	<td>Background Research</td>
        <td>Thorough and connected to scientific concepts and vocabulary within the 
project. Minimum 1 page.</td>
<td>
    <select name="research">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
</td>
    </tr>
    <tr>
    	<td>Material List and Procedure</td>
        <td>All materials are listed. Procedure is step by step format. Procedure clearly states what was done so another person could perform your experiment exactly.</td>
<td>
    <select name="procedure">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
</td>
    </tr>
    <tr>
    	<td>Pictures of Experiment</td>
        <td>Photos of the procedure being carried out are present. Photos were taken 
by student and are not copied from the internet. Photos do not show faces of people (faces may be covered)</td>
<td>
    <select name="pictures">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</td>
    </tr>
     <tr>
    	<td>Variables</td>
        <td>Independent, dependent and controlled variables are clearly defined</td>
<td>
    <select name="variables">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
</td>
    <tr>
    	<td>Data</td>
        <td>Data table and graph is presented including a title, units, labelled axis.</td>
<td>
		<select name="data">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</td>
    </tr>
    <tr>
    	<td>Analysis</td>
        <td>Written description of data collected.</td>
<td>
	<select name="analysis">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</td>
    </tr>
    <tr>
    	<td>Conclusion</td>
        <td>Purpose is restated. The original question is answered. The hypothesis is accepted or refuted.</td>
<td>
	<select name="conclusion">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</td>
    <tr>
    	<td>Error Analysis</td>
        <td>Explain how data may not be perfectly accurate. How could accuracy be improved next time?</td>
<td>
    <select name="error">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
</td>
    </tr>
    <tr>
    	<td>Reference List</td>
        <td>Sources are listed (Not Google, Wikipedia or Science Buddies).</td>
<td>
    <select name="references">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
</td>
    </tr>
    <tr>
    	<td>Artistic Qualities</td>
        <td>Backboard is neat, organized, and appealing. No spelling errors.</td>
<td>
    <select name="artistic">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</td>
    </tr>

        <input type="hidden" name="projectnumber" value="<?php echo $ProjectID?>"> 
</table>
<br>
    <input type="submit" name="experimental" value="Submit"></form>

</body>
</html>
