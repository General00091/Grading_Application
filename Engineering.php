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
<h1 style="text-align:center;">Judging Criteria - Design Projects</h1>   
<table style="width:100%">
<?php
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'presenters';
 $connection = mysqli_connect($host, $user, $pass, $db);
 $ProjectID = mysqli_real_escape_string($connection, $_REQUEST['projectID']);

echo("project ID: " . $ProjectID);
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
<form method="POST" action="INTRO_WIP.php"> 
    <tr>
        <th>OVERALL IMPRESSION OF THE DESIGN PROCESS \\ 50 POINTS</th>
        
    <tr>
        <td>Design Approach Overall</td>
        <td> Has identified a need or real world problem. 
</td> 
<td>
		<input type="radio" name="designA" value="0" required> 0<br>
        <td> 
		<input type="radio" name="designA" value="1" required> 1<br>
        <td> 
		<input type="radio" name="designA" value="2" required> 2<br>
        <td> 
        <input type="radio" name="designA" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="designA" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="designA" value="5" required> 5<br>
    </td> 

    </tr>
    <tr>
        <td>Knowledge Gained</td>
        <td>Exhibits a thorough understanding and the application of the design.
            Student has acquired design skills. 
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
    	<td>Design Approach-Performance Criteria</td>
        <td>Clear performance criteria have been developed to address the features of the product, algorithm, proof, model, etc.</td>
         <td>
		<input type="radio" name="designAP" value="0" required> 0<br>
        <td> 
		<input type="radio" name="designAP" value="1" required> 1<br>
        <td> 
		<input type="radio" name="designAP" value="2" required> 2<br>
        <td> 
        <input type="radio" name="designAP" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="designAP" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="designAP" value="5" required> 5<br>   
             </td> 
    </tr>
    <tr>
    	<td>Constructing and Testing the Prototype</td>
        <td>Has constructed and tested a prototype. data analysis/validation is evident.</td>
        <td>
		<input type="radio" name="prototype" value="0" required> 0<br>
        <td> 
		<input type="radio" name="prototype" value="1" required> 1<br>
        <td> 
		<input type="radio" name="prototype" value="2" required> 2<br>
        <td> 
        <input type="radio" name="prototype" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="prototype" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="prototype" value="5" required> 5<br>
        <td> 
		<input type="radio" name="prototype" value="6" required> 6<br>
        <td> 
		<input type="radio" name="prototype" value="7" required> 7<br>
        <td> 
		<input type="radio" name="prototype" value="8" required> 8<br>
        <td> 
		<input type="radio" name="prototype" value="9" required> 9<br>
        <td> 
        <input type="radio" name="prototype" value="10" required> 10<br>        
    </td>
       <tr>
    	<td>Validity of Evaluation/Conclusion</td>
        <td>Conclusion accurately reports with the success/failure of the design.</td>
         <td>
		<input type="radio" name="evaluation" value="0" required> 0<br>
        <td> 
		<input type="radio" name="evaluation" value="1" required> 1<br>
        <td> 
		<input type="radio" name="evaluation" value="2" required> 2<br>
        <td> 
        <input type="radio" name="evaluation" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="evaluation" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="evaluation" value="5" required> 5<br>
        <td> 
		<input type="radio" name="evaluation" value="6" required> 6<br>
        <td> 
		<input type="radio" name="evaluation" value="7" required> 7<br>
        <td> 
		<input type="radio" name="evaluation" value="8" required> 8<br>
        <td> 
		<input type="radio" name="evaluation" value="9" required> 9<br>
        <td> 
		<input type="radio" name="evaluation" value="10" required> 10<br>  </td>
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
		<input type="radio" name="presenQty" value="0" required> 0<br>
        <td> 
		<input type="radio" name="presenQty" value="1" required> 1<br>
        <td> 
		<input type="radio" name="presenQty" value="2" required> 2<br>
        <td> 
        <input type="radio" name="presenQty" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="presenQty" value="4" required> 4<br></td>
        <td> 
		<input type="radio" name="presenQty" value="5" required> 5<br> </td>
    
</table>
<table style="width:100%">
    <tr>
        <th>DISPLAY \\ 50 POINTS</th>
    </tr>
    <tr>
    	<td>Abstract</td>
        <td>Summary of project containing: problem, criteria, constraints, solution, and results of the design process.</td>
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
        <td>
        <input type="radio" name="abstract" value="5" required> 5<br></td>
    <tr>

    	<td>Problem Statement</td>
        <td>Problem is clearly defined along with information on who experiences problem, where is the problem experienced, over what time period was studied, and how many people experienced this problem.</td>
<td>
		<input type="radio" name="statement" value="0" required> 0<br>
        <td> 
		<input type="radio" name="statement" value="1" required> 1<br>
        <td> 
		<input type="radio" name="statement" value="2" required> 2<br>
        <td> 
        <input type="radio" name="statement" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="statement" value="4" required> 4<br></td>
    <td>
        <input type="radio" name="statement" value="5" required> 5<br></td>
    </tr>
    <tr>
    	<td>Solution</td>
        <td>A solution is described that meets the problem and defines a criteria for successful design. Criteria is listed in a table.</td>
<td>
		<input type="radio" name="solution" value="0" required> 0<br>
        <td> 
		<input type="radio" name="solution" value="1" required> 1<br>
        <td> 
		<input type="radio" name="solution" value="2" required> 2<br>
        <td> 
        <input type="radio" name="solution" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="solution" value="4" required> 4<br></td>
    <td>
        <input type="radio" name="solution" value="5" required> 5<br></td>
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
    	<td>Materials  and Prototype Process</td>
        <td>All materials are listed. Procedure is step by step format. Procedure clearly states what has been done in the design process. A photo(s) of the procedure being carried out is/are present.</td>
        <td>
		<input type="radio" name="materials" value="0" required> 0<br>
        <td> 
		<input type="radio" name="materials" value="1" required> 1<br>
        <td> 
		<input type="radio" name="materials" value="2" required> 2<br>
        <td> 
        <input type="radio" name="materials" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="materials" value="4" required> 4<br></td>

    <tr>
    	<td>Pictures</td>
        <td>Photos of the student's prototype, design and redesign process.</td>
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
    	<td>Results and Data</td>
        <td>Data indicates the prototype has been tested against a predefined criteria.</td>
        <td>
		<input type="radio" name="results" value="0" required> 0<br>
        <td> 
		<input type="radio" name="results" value="1" required> 1<br>
        <td> 
		<input type="radio" name="results" value="2" required> 2<br>
        <td> 
        <input type="radio" name="results" value="3" required> 3<br></td>
    <tr>
    	<td>Conclusion</td>
        <td>Describes how the solution was created. Meets the need of the problem statement. Referencing data and/or results.</td>
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
    </tr>
    <tr>
    	<td>Error and Improvement</td>
        <td>Describes possible errors in process and indicates improvements to design.</td>
        <td>
		<input type="radio" name="improvement" value="0" required> 0<br>
        <td> 
		<input type="radio" name="improvement" value="1" required> 1<br>
        <td> 
		<input type="radio" name="improvement" value="2" required> 2<br>
        <td> 
        <input type="radio" name="improvement" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="improvement" value="4" required> 4<br></td>
    </tr>
    <tr>
    	<td>Reference</td>
        <td>3 sources are listed(Google, Wikipedia or Science Buddies are not acceptable).</td>
        <td>
		<input type="radio" name="reference" value="0" required> 0<br>
        <td> 
		<input type="radio" name="reference" value="1" required> 1<br>
        <td> 
		<input type="radio" name="reference" value="2" required> 2<br>
        <td> 
        <input type="radio" name="reference" value="3" required> 3<br></td>
        <td>
        <input type="radio" name="reference" value="4" required> 4<br></td>
    </tr>
    <tr>
    	<td>Visual Design</td>
        <td>Background is neat, organized, and appealing. No spelling errors.</td>
        <td>
		<input type="radio" name="visualD" value="0" required> 0<br>
        <td> 
		<input type="radio" name="visualD" value="1" required> 1<br>
        <td> 
		<input type="radio" name="visualD" value="2" required> 2<br>
        <td> 
        <input type="radio" name="visualD" value="3" required> 3<br></td>
    </tr>

        <input type="hidden" name="projectnumber" value="<?php echo $ProjectID?>"> 

</table>
<br>
        
<button type="submit">Submit</button></form>

    </form> 
    
</body>
</html>

