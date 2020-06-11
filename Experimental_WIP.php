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

$ProjectID = $_REQUEST['projectID'];

echo("projectID: " . $ProjectID);
?>
<br>
Hello <?php echo $_POST["projectID"]; ?>!<br>
    <form action="Intro.php"> 
    <tr>
        <th>OVERALL IMPRESSION OF THE PROJECT \\ 50 POINTS</th>
        
    <tr>
        <td>Scientific Approach</td>
        <td> Well defined problem was solved using scientific principles. 
</td> 
<td>
		<input type="radio" name="Scientific Approach" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Scientific Approach" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Scientific Approach" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Scientific Approach" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Scientific Approach" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Scientific Approach" value="5" checked> 5<br>
        <td> 
		<input type="radio" name="Scientific Approach" value="6" checked> 6<br>
        <td> 
		<input type="radio" name="Scientific Approach" value="7" checked> 7<br>
 </td>

    </tr>
    <tr>
        <td>Knowledge Gained</td>
        <td>Student has understood the topic, mastered the scientific skills, and 
answered all questions correctly. 
</td>
        <td>
		<input type="radio" name="Knowledge Gained" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Knowledge Gained" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Knowledge Gained" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Knowledge Gained" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Knowledge Gained" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Knowledge Gained" value="5" checked> 5<br>
        <td> 
		<input type="radio" name="Knowledge Gained" value="6" checked> 6<br>
        <td> 
		<input type="radio" name="Knowledge Gained" value="7" checked> 7<br>
        <td> 
		<input type="radio" name="Knowledge Gained" value="8" checked> 8<br>
        <td> 
		<input type="radio" name="Knowledge Gained" value="9" checked> 9<br>
        <td> 
		<input type="radio" name="Knowledge Gained" value="10" checked> 10<br>        
 </td>
    </tr>
    <tr>
    	<td>Reliability of Data</td>
        <td>Data is numerical and metric. Data is reliable with repeated trials.</td>
         <td>
		<input type="radio" name="Reliability of Data" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Reliability of Data" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Reliability of Data" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Reliability of Data" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Reliability of Data" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Reliability of Data" value="5" checked> 5<br>
        <td> 
		<input type="radio" name="Reliability of Data" value="6" checked> 6<br>
        <td> 
		<input type="radio" name="Reliability of Data" value="7" checked> 7<br>
        <td> 
		<input type="radio" name="Reliability of Data" value="8" checked> 8<br>
        <td> 
		<input type="radio" name="Reliability of Data" value="9" checked> 9<br>
        <td> 
		<input type="radio" name="Reliability of Data" value="10" checked> 10<br>        
 </td>
    </tr>
    <tr>
    	<td>Validity of Conclusion</td>
        <td>Conclusion is consistent with the data provided.</td>
         <td>
		<input type="radio" name="Validity of Conclusion" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Validity of Conclusion" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Validity of Conclusion" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Validity of Conclusion" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Validity of Conclusion" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Validity of Conclusion" value="5" checked> 5<br>
        <td> 
		<input type="radio" name="Validity of Conclusion" value="6" checked> 6<br>
        <td> 
		<input type="radio" name="Validity of Conclusion" value="7" checked> 7<br>
        <td> 
        <input type="radio" name="Validity of Conclusion" value="8" checked> 8<br>
    </td>
    <tr>
    	<td>Originality</td>
        <td>Topic is original and method is highly creative.</td>
         <td>
		<input type="radio" name="Originality" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Originality" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Originality" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Originality" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Originality" value="4" checked> 4<br></td>
        <td> 
        <input type="radio" name="Originality" value="5" checked> 5<br>
    </td>
    </tr>
    <tr>
    	<td>Presentation Quality</td>
        <td>Speaks fluently with good eye contact, polite, dynamic, and interested in 
his/her subject. Not relied heavily on note cards or the board.</td>
<td>
		<input type="radio" name="Presentation Quality" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Presentation Quality" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Presentation Quality" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Presentation Quality" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Presentation Quality" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Presentation Quality" value="5" checked> 5<br>
        <td> 
		<input type="radio" name="Presentation Quality" value="6" checked> 6<br>
        <td> 
		<input type="radio" name="Presentation Quality" value="7" checked> 7<br>
        <td> 
		<input type="radio" name="Presentation Quality" value="8" checked> 8<br>
        <td> 
		<input type="radio" name="Presentation Quality" value="9" checked> 9<br>
        <td> 
		<input type="radio" name="Presentation Quality" value="10" checked> 10<br>        
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
		<input type="radio" name="Abstract" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Abstract" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Abstract" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Abstract" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Abstract" value="4" checked> 4<br></td>
    <tr>
    	<td>Question and Hypothesis</td>
        <td>What you will answer by conducting the experiment. A prediction is made 
using an “if... then... because...” statement.</td>
<td>
		<input type="radio" name="Question and Hypothesis" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Question and Hypothesis" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Question and Hypothesis" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Question and Hypothesis" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Question and Hypothesis" value="4" checked> 4<br></td>
    </tr>
    <tr>
    	<td>Background Research</td>
        <td>Thorough and connected to scientific concepts and vocabulary within the 
project. Minimum 1 page.</td>
<td>
		<input type="radio" name="Background Research" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Background Research" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Background Research" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Background Research" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Background Reasearch" value="4" checked> 4<br></td>
    </tr>
    <tr>
    	<td>Material List and Procedure</td>
        <td>All materials are listed. Procedure is step by step format. Procedure clearly states what was done so another person could perform your experiment exactly.</td>
        <td>
		<input type="radio" name="Material List and Procedure" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Material List and Procedure" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Material List and Procedure" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Material List and Procedure" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Material List and Procedure" value="4" checked> 4<br></td>

    <tr>
    	<td>Pictures of Experiment</td>
        <td>Photos of the procedure being carried out are present. Photos were taken 
by student and are not copied from the internet. Photos do not show faces of people (faces may be covered)</td>
<td>
		<input type="radio" name="Pictures of Experiment" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Pictures of Experiment" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Pictures of Experiment" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Pictures of Experiment" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Pictures of Experiment" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Pictures of Experiment" value="5" checked> 5<br>
        </td>
    </tr>
     <tr>
    	<td>Variables</td>
        <td>Independent, dependent and controlled variables are clearly defined</td>
        <td>
		<input type="radio" name="Variables" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Variables" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Variables" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Variables" value="3" checked> 3<br></td>
    <tr>
    	<td>Data</td>
        <td>Data table and graph is presented including a title, units, labelled axis.</td>
        <td>
		<input type="radio" name="Data" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Data" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Data" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Data" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Data" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Data" value="5" checked> 5<br>
        </td>
    </tr>
    <tr>
    	<td>Analysis</td>
        <td>Written description of data collected.</td>
        <td>
		<input type="radio" name="Analysis" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Analysis" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Analysis" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Analysis" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Analysis" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Analysis" value="5" checked> 5<br>
        </td>
    </tr>
    <tr>
    	<td>Conclusion</td>
        <td>Purpose is restated. The original question is answered. The hypothesis is accepted or refuted.</td>
        <td>
		<input type="radio" name="Conclusion" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Conclusion" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Conclusion" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Conclusion" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Conclusion" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Conclusion" value="5" checked> 5<br>
        </td>
    <tr>
    	<td>Error Analysis</td>
        <td>Explain how data may not be perfectly accurate. How could accuracy be improved next time?</td>
        <td>
		<input type="radio" name="Error Analysis" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Error Analysis" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Error Analysis" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Error Analysis" value="3" checked> 3<br></td>
    </tr>
    <tr>
    	<td>Reference List</td>
        <td>Sources are listed (Not Google, Wikipedia or Science Buddies).</td>
        <td>
		<input type="radio" name="Reference List" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Reference List" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Reference List" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Reference List" value="3" checked> 3<br></td>
    </tr>
    <tr>
    	<td>Artistic Qualities</td>
        <td>Backboard is neat, organized, and appealing. No spelling errors.</td>
        <td>
		<input type="radio" name="Artistic Qualities" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Artistic Qualities" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Artistic Qualities" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Artistic Qualities" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Artistic Qualities" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Artistic Qualities" value="5" checked> 5<br>
        </td>
    </tr>
</table>
<br>
        <button type="submit">Submit</button>

    </form>

</body>
</html>
