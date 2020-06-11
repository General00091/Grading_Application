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

$ProjectID = $_REQUEST['projectID'];

echo("projectID: " . $ProjectID);
?>
<br>
Hello <?php echo $_POST["projectID"]; ?>!<br>
    <form action="INTRO_WIP.php"> 
    <tr>
        <th>OVERALL IMPRESSION OF THE DESIGN PROCESS \\ 50 POINTS</th>
        
    <tr>
        <td>Design Approach Overall</td>
        <td> Has identified a need or real world problem. 
</td> 
<td>
		<input type="radio" name="Design Approach Overall" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Design Approach Overall" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Design Approach Overall" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Design Approach Overall" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Design Approach Overall" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Design Approach Overall" value="5" checked> 5<br>
    </td> 

    </tr>
    <tr>
        <td>Knowledge Gained</td>
        <td>Exhibits a thorough understanding and the application of the design.
            Student has acquired design skills. 
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
    	<td>Design Approach-Performance Criteria</td>
        <td>Clear performance criteria have been developed to address the features of the product, algorithm, proof, model, etc.</td>
         <td>
		<input type="radio" name="Design Approach-Performance Criteria" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Design Approach-Performance Criteria" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Design Approach-Performance Criteria" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Design Approach-Performance Criteria" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Design Approach-Performance Criteria" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Design Approach-Performance Criteria" value="5" checked> 5<br>   
             </td> 
    </tr>
    <tr>
    	<td>Constructing and Testing the Prototype</td>
        <td>Has constructed and tested a prototype. data analysis/validation is evident.</td>
        <td>
		<input type="radio" name="Constructing and Testing the Prototype" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Constructing and Testing the Prototype" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Constructing and Testing the Prototype" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Constructing and Testing the Prototype" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Constructing and Testing the Prototype" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Constructing and Testing the Prototype" value="5" checked> 5<br>
        <td> 
		<input type="radio" name="Constructing and Testing the Prototype" value="6" checked> 6<br>
        <td> 
		<input type="radio" name="Constructing and Testing the Prototype" value="7" checked> 7<br>
        <td> 
		<input type="radio" name="Constructing and Testing the Prototype" value="8" checked> 8<br>
        <td> 
		<input type="radio" name="Constructing and Testing the Prototype" value="9" checked> 9<br>
        <td> 
        <input type="radio" name="Constructing and Testing the Prototype" value="10" checked> 10<br>        
    </td>
       <tr>
    	<td>Validity of Evaluation/Conclusion</td>
        <td>Conclusion accurately reports with the success/failure of the design.</td>
         <td>
		<input type="radio" name="Validity of Evaluation/Conclusion" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Validity of Evaluation/Conclusion" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Validity of Evaluation/Conclusion" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Validity of Evaluation/Conclusion" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Validity of Evaluation/Conclusion" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Validity of Evaluation/Conclusion" value="5" checked> 5<br>
        <td> 
		<input type="radio" name="Validity of Evaluation/Conclusion" value="6" checked> 6<br>
        <td> 
		<input type="radio" name="Validity of Evaluation/Conclusion" value="7" checked> 7<br>
        <td> 
		<input type="radio" name="Validity of Evaluation/Conclusion" value="8" checked> 8<br>
        <td> 
		<input type="radio" name="Validity of Evaluation/Conclusion" value="9" checked> 9<br>
        <td> 
		<input type="radio" name="Validity of Evaluation/Conclusion" value="10" checked> 10<br>  </td>
    <tr>
    	<td>Originality</td>
        <td>Topic is original and method is highly creative.</td>
         <td> <input type="radio" name="Originality" value="0" checked> 0<br>
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
		<input type="radio" name="Presentation Quality" value="5" checked> 5<br> </td>
    
</table>
<table style="width:100%">
    <tr>
        <th>DISPLAY \\ 50 POINTS</th>
    </tr>
    <tr>
    	<td>Abstract</td>
        <td>Summary of project containing: problem, criteria, constraints, solution, and results of the design process.</td>
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
    <td>
    <input type="radio" name="Abstract" value="5" checked> 5<br></td>
    <tr>
    	<td>Problem Statement</td>
        <td>Problem is clearly defined along with information on who experiences problem, where is the problem experienced, over what time period was studied, and how many people experienced this problem.</td>
<td>
		<input type="radio" name="Problem Statement" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Problem Statement" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Problem Statement" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Problem Statement" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Problem Statement" value="4" checked> 4<br></td>
    <td>
        <input type="radio" name="Problem Statement" value="5" checked> 5<br></td>
    </tr>
    <tr>
    	<td>Solution</td>
        <td>A solution is described that meets the problem and defines a criteria for successful design. Criteria is listed in a table.</td>
<td>
		<input type="radio" name="Solution" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Solution" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Solution" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Solution" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Solution" value="4" checked> 4<br></td>
    <td>
        <input type="radio" name="Solution" value="5" checked> 5<br></td>
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
        <input type="radio" name="Background Research" value="4" checked> 4<br></td>
    </tr>
    <tr>
    	<td>Materials  and Prototype Process</td>
        <td>All materials are listed. Procedure is step by step format. Procedure clearly states what has been done in the design process. A photo(s) of the procedure being carried out is/are present.</td>
        <td>
		<input type="radio" name="Materials  and Prototype Process" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Materials  and Prototype Process" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Materials  and Prototype Process" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Materials  and Prototype Process" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Materials  and Prototype Process" value="4" checked> 4<br></td>

    <tr>
    	<td>Pictures</td>
        <td>Photos of the student's prototype, design and redesign process.</td>
<td>
		<input type="radio" name="Pictures" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Pictures" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Pictures" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Pictures" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Pictures" value="4" checked> 4<br></td>
        <td> 
		<input type="radio" name="Pictures" value="5" checked> 5<br>
        </td>
    </tr>
     <tr>
    	<td>Results and Data</td>
        <td>Data indicates the prototype has been tested against a predefined criteria.</td>
        <td>
		<input type="radio" name="Results and Data" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Results and Data" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Results and Data" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Results and Data" value="3" checked> 3<br></td>
    <tr>
    	<td>Conclusion</td>
        <td>Describes how the solution was created. Meets the need of the problem statement. Referencing data and/or results.</td>
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
    </tr>
    <tr>
    	<td>Error and Improvement</td>
        <td>Describes possible errors in process and indicates improvements to design.</td>
        <td>
		<input type="radio" name="Error and Improvement" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Error and Improvement" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Error and Improvement" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Error and Improvement" value="3" checked> 3<br></td>
        <td>
        <input type="radio" name="Error and Improvement" value="4" checked> 4<br></td>
    </tr>
    <tr>
    	<td>Reference</td>
        <td>3 sources are listed(Google, Wikipedia or Science Buddies are not acceptable).</td>
        <td>
		<input type="radio" name="Reference" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Reference" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Reference" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Reference" value="3" checked> 3<br></td>
        <td>
            <input type="radio" name="Reference" value="4" checked> 4<br></td>
            </tr>
    <tr>
    	<td>Visual Design</td>
        <td>Background is neat, organized, and appealing. No spelling errors.</td>
        <td>
		<input type="radio" name="Visual Design" value="0" checked> 0<br>
        <td> 
		<input type="radio" name="Visual Design" value="1" checked> 1<br>
        <td> 
		<input type="radio" name="Visual Design" value="2" checked> 2<br>
        <td> 
        <input type="radio" name="Visual Design" value="3" checked> 3<br></td>
    </tr>
</table>
<br>
        <button type="submit">Submit</button></form>

    </form> 
    
</body>
</html>

