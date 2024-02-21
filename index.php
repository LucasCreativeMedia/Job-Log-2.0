<?php
require_once('dbConfig.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Job Log 2.0</title>
    <link rel="stylesheet" href="css/projectTrackingStyles.css">
  </head>
  <body>
  <div id="wrapper">
  <h1>Project Tracking</h1>

      <h2>ENTER YOUR INFORMATION</h2>
      <form action="" method="post">

            <label for="fname"><b>First Name:</b></label>
            <input type="text" id="fname" name="fname" required><br>

            <label for="lname"><b>Last Name:</b></label>
            <input type="text" id="lname" name="lname" required><br>

            <label for="jobnumber"><b>Job Number:</b></label>
            <input type="text" id="jobnumber" name="jobnumber" required><br>

            <label for="hours"><b>Hours:</b></label>
            <input type="text" id="hours" name="hours" required><br>

            <label for="completiondate"><b>Completion Date:</b></label>
            <input type="date" id="completiondate" name="completiondate" required><br>

            <input type="submit" id="subBtn" name="submitbutton" value="submit">
      </form>
      
      <div id="phpOutput">
        <?php
        if (isset($_POST['submitbutton'])) {
            $fname =          $_POST['fname'];
            $lname =          $_POST['lname'];
            $jobnumber =      $_POST['jobnumber'];
            $hours =          $_POST['hours'];
            $completiondate = $_POST['completiondate'];

            $sql = "INSERT INTO ??? (first_name, last_name, job_number, job_hours, completion_date) VALUES (?,?,?,?,?)";
            $statementinsert = $db->prepare($sql);
            $result = $statementinsert->execute([$fname, $lname, $jobnumber, $hours, $completiondate]);
            if ($result) {
                echo 'Entry Successful.';
            } else {
                echo 'OOOPS! Not sure what happened!!';
            }

        } ?>
        </div>

        <footer>Lucas Creative Media</footer>
  </div>
  </body>
</html>
