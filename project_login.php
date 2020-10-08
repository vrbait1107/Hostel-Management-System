<?php
if (isset($_POST["submit"])) {

    if (!empty($_POST['user']) && !empty($_POST['pass'])) {
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);

        $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
        mysql_select_db('mysql') or die("cannot select DB");

        $query = mysql_query("SELECT * FROM login WHERE username='" . $user . "' AND password='" . $pass . "'");
        $numrows = mysql_num_rows($query);
        if ($numrows != 0) {
            while ($row = mysql_fetch_assoc($query)) {
                $dbusername = $row['username'];
                $dbpassword = $row['password'];
            }

            if ($user == $dbusername && $pass == $dbpassword) {
                session_start();
                $_SESSION['sess_user'] = $user;

                /* Redirect browser */
                header("Location: project_member.php");
            }
        } else {
            $error_message = "Invalid username or password!";
        }

    } else {
        $error_message = "All fields are required!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-
scale=1">
  <title>HOSTEL MANAGEMENT SYSTEM | LOGIN</title>

  <!-- Include HeaderScripts -->
  <?php include_once "includes/headerScripts.php";?>


  <style>

    .error-message {
      padding: 7px 10px;
      background: #fff1f2;
      border: #ffd5da 1px solid;
      color: #d6001c;
      border-radius: 10px;
      width: 100%;
    }

    #topContainer {
      background-image: url("images/7.jpg");
      height: 500px;
      width: 100%;
      background-size: cover;
    }

    #topRow {
      margin-top: 100px;
      text-align: center;
    }

    .margintop {
      margin-top: 30px;
    }

    .title {
      margin-top: 100px;
      font-size: 300%;
    }

    .marginbottom {
      margin-bottom: 30px;
    }

  </style>
</head>

<body>

    <!-- Include Navbar -->
   <?php include_once "includes/authNavbar.php";?>


  <div class="container contentContainer" id="topContainer">

    <div class="row">

      <div class="col-md-6 offset-md-3" id="topRow">

        <h1 class="margintop font-Staatliches-heading">HOSTEL MANAGEMENT SYSTEM</h1>


        <form class="margintop" action="" method="POST">

          <div class="form-group">
            <input type="email" placeholder="Email" name="user" class="form-control" />
          </div>

          <div class="form-group">
            <input type="password" placeholder="Password" name="pass" class="form-control" />
          </div>

          <input class="btn btn-primary btn-block rounded-pill" type="submit" value="Login" name="submit" />

        </form>

        <br>

        <?php if (!empty($error_message)) {?>
        <div class="error-message">
          <?php if (isset($error_message)) {
    echo $error_message;
}?>
          </div>
        <?php }?>

      </div>
    </div>
  </div>


  <!-- Include FooterScripts -->
   <?php include_once "includes/footerScripts.php";?>

</body>

</html>