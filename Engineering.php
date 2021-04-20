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
<h1 style="text-align:center;">Judging Criteria - Engineering/Design Project</h1>   
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
      echo "Number not assigned";
    }
    
    mysqli_close($connection);
?>

    <form method="POST" action="Calculate.php"> 
    <tr>
        <th>OVERALL IMPRESSION OF THE DESIGN PROCESS \\ 50 POINTS</th>
        
    </tr>
    <tr>
        <td>Design Approach Overall</td>
        <td> Has identified a need or real world problem. 
</td> 
<td>
    <select name="designA">
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
        <td>Knowledge Gained</td>
        <td>Exhibits a thorough understanding and the application of the design.
            Student has acquired design skills. 
</td>
<td>
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
    	<td>Design Approach-Performance Criteria</td>
        <td>Clear performance criteria have been developed to address the features of the product, algorithm, proof, model, etc.</td>
<td>
    <select name="designAP">
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
    	<td>Constructing and Testing the Prototype</td>
        <td>Has constructed and tested a prototype. data analysis/validation is evident.</td>
<td>
	<select name="prototype">
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
       <tr>
    	<td>Validity of Evaluation/Conclusion</td>
        <td>Conclusion accurately reports with the success/failure of the design.</td>
<td>
    <select name="evaluation">
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
    <select name="presentQty">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
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
        <td>Summary of project containing: problem, criteria, constraints, solution, and results of the design process.</td>
<td>
    <select name="abstract">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select> 
</td>
    <tr>

    	<td>Problem Statement</td>
        <td>Problem is clearly defined along with information on who experiences problem, where is the problem experienced, over what time period was studied, and how many people experienced this problem.</td>
<td>
    <select name="statement">
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
    	<td>Solution</td>
        <td>A solution is described that meets the problem and defines a criteria for successful design. Criteria is listed in a table.</td>
<td>
    <select name="solution">
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
    	<td>Materials  and Prototype Process</td>
        <td>All materials are listed. Procedure is step by step format. Procedure clearly states what has been done in the design process. A photo(s) of the procedure being carried out is/are present.</td>
<td>
    <select name="materials">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
</td>

    <tr>
    	<td>Pictures</td>
        <td>Photos of the student's prototype, design and redesign process.</td>
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
    	<td>Results and Data</td>
        <td>Data indicates the prototype has been tested against a predefined criteria.</td>
<td>
    <select name="results">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select> 
</td>
    <tr>
    	<td>Conclusion</td>
        <td>Describes how the solution was created. Meets the need of the problem statement. Referencing data and/or results.</td>
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
    </tr>
    <tr>
    	<td>Error and Improvement</td>
        <td>Describes possible errors in process and indicates improvements to design.</td>
<td>
    <select name="improvement">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    </tr>
    <tr>
    	<td>Reference</td>
        <td>3 sources are listed (Google, Wikipedia or Science Buddies are not acceptable).</td>
<td>
	<select name="reference">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
</td>
</tr>
    <tr>
    	<td>Visual Design</td>
        <td>Background is neat, organized, and appealing. No spelling errors.</td>
<td>
    <select name="visualD">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select> 
</td>
    </tr>

        <input type="hidden" name="projectnumber" value="<?php echo $ProjectID?>"> 

</table>
<br>
        
<input type="submit" name="engineering" value="Submit"></form>

</body>
</html>
 
