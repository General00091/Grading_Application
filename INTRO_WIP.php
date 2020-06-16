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
   echo $totalscore;
   
  ?>
<form method="POST" action="Engineering.php">
  Project ID:<br>
  <input type="number" name="projectID" required>
  <br>
  Type Of Project: <br>
  <select name="typeOfProject" required>
    <option selected hidden value="">Select Rubric</option>
    <option value="experimental">Experimental</option>
    <option value="engineering">Engineering</option>
    </select>
      <button type="submit">Submit</button></form>
    
</form>

</body>
</html>
