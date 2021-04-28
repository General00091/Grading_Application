<!DOCTYPE html>
<html>
  <head>
    <!-- title soon to change...hopefully -->
    <title>Project001.site</title>
    <style>
    /* form is used to style where to input project ID and the submit button on the page */
    form {padding-top: 120px;
    text-align: center;
    font-size: 30px;
    }
    /* input is used to style the input of project ID */
    input {width: 250px;
      height: 40px;
      font-size: 30px
    }
    /* body is used to style body text and color */
    body {
      font-family: Arial, sans-serif;
      background-color: #E0EBE5;
    }
    /* button is used to style the submit button */
    button {
      text-align: center;
      font-size: 16px;
      padding: 15px 32px;
      margin: 4px 2px;
    }

    </style>
  </head>
<body>
 <!-- title size and position of the title text -->
<h1 style="font-size:300%;">
<h1 style="text-align:center;">HSA McKinley Park Science Fair Grader</h1>
<form>
  Project ID:<br>
  <input type="number" name="projectID" required>
  <br><br>
    <button type="submit" formaction="Redirect.php">Submit</button>
</form>
</body>
</html>
