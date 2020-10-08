<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("location: admin_login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HOSTEL MANAGEMENT SYSTEM | ADMINISTRATOR DASHBOARD</title>

  <!-- Include HeaderScripts -->
  <?php include_once "includes/headerScripts.php";?>

  <style>
    .navbar-brand {
      font-size: 1.8em;

    }

    #topContainer {
      background-image: url("images/7.jpg");
      height: 500px;
      width: 100%;
      background-size: cover;
      /*  FOR FULL IMAGE TO BE DISPLAYED NOT JUST PART OF IT  */
    }

    #topRow {
      margin-top: 100px;
      text-align: center;

    }

    #topRow h1 {
      font-size: 250%;
      color: #000000;
      padding-top: 40px;

    }

    .bold {
      font-weight: bold;

    }

    .margintop {
      margin-top: 30px;


    }

    .center {
      text-align: center;


    }

    .title {
      margin-top: 100px;
      font-size: 300%;

    }

    #footer {
      background-color: #B0D1FB;
      padding-top: 70px;
      width: 100%;

    }

    .marginbottom {
      margin-bottom: 30px;

    }

    .appstoreimage {
      width: 250px;

    }
  </style>
</head>

<body>



  <div class="container">

    <div class="row" class="center">

      <h1 class="center title"></h1>
      <p class="lead center"></p>


    </div>

    <div class="row marginbottom">
      <div class="col-md-6 margintop">
        <h2><span class="glyphicon glyphicon-list"></span>Student Details</h2>
        <p>Display List of students and their details.Provision for hostel vacating.</p>

        <input type="button" class="btn btn-success" value="Open" onclick="location.href = 'view_users.php'">
      </div>


      <div class="col-md-6 margintop">
        <h2><span class="glyphicon glyphicon-list"></span>View Feedbacks</h2>
        <p>View feedbacks given by students regarding hostel management and facilities.</p>

        <input type="button" class="btn btn-success" value="Open" onclick="location.href = 'view_feedback.php'">
      </div>

      <div class="col-md-6 margintop">
        <h2><span class="glyphicon glyphicon-list"></span>Complaint Register</h2>
        <p>View complaint Register containing complaints by the students.</p>

        <input type="button" class="btn btn-success" value="Open" onclick="location.href = 'view_complaints.php'">
      </div>

      <div class="col-md-6 margintop">
        <h2><span class="glyphicon glyphicon-list"></span>Allotment List</h2>
        <p>View rooms alloted to the students
        <p>

          <input type="button" class="btn btn-success" value="Open" onclick="location.href = 'view_allotment_list.php'">
      </div>
    </div>

  </div>

  <!-- Include FooterScripts -->
  <?php include_once "includes/footerScripts.php";?>

</body>

</html>