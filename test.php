<?php include('session.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>7topics - Login Demo</title>

  <!-- Include HeaderScripts -->
  <?php include_once "includes/headerScripts.php";?>

</head>

<body>

  <header>

    <nav>

      <ul>

        <li>7topics Demo</li>


        <li>Tutorial</li>

      </ul>

    </nav>

  </header>


  <div id="center">

    <div id="center-set">


      -written by Rahul Ranjan


      <h1 align='center'>Welcome <?php  echo  $loggedin_session;  ?>,</h1>



      You are now logged in. you can logout by clicking on signout link given below.


      <div id="contentbox">
        <?php include('db.php'); $sql="SELECT  *  FROM  member  where  mem_id=$loggedin_id"; $result=mysql_query($sql); ?>
        <?php while($rows=mysql_fetch_array($result)){ ?>

        <div id="signup">

          <div id="signup-st">

            <form action="" method="POST" id="signin" id="reg">

              <div id="reg-head" class="headrg">Your Profile</div>


              <table border="0" align="center" cellpadding="2" cellspacing="0">

                <tr id="lg-1">

                  <td class="tl-1">
                    <div align="left" id="tb-name">Reg id:</div>
                  </td>


                  <td class="tl-4"><?php  echo  $rows['mem_id'];  ?></td>

                </tr>


                <tr id="lg-1">

                  <td class="tl-1">
                    <div align="left" id="tb-name">Name:</div>
                  </td>


                  <td class="tl-4"><?php  echo  $rows['fname'];  ?> <?php  echo  $rows['lname'];  ?></td>

                </tr>


                <tr id="lg-1">

                  <td class="tl-1">
                    <div align="left" id="tb-name">Email id:</div>
                  </td>


                  <td class="tl-4"><?php  echo  $rows['address'];  ?></td>

                </tr>


                <tr id="lg-1">

                  <td class="tl-1">
                    <div align="left" id="tb-name">Gender:</div>
                  </td>


                  <td class="tl-4"><?php  echo  $rows['gender'];  ?></td>

                </tr>

              </table>


              <div id="reg-bottom" class="btmrg">Copyright &copy; 2015 7topics.com</div>

            </form>

          </div>

        </div>


        <div id="login">

          <div id="login-sg">

            <div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>


            <div id="st"><a href="deleteac.php" id="st-btn">Delete Account</a></div>

          </div>

        </div>

        <?php //  close  while  loop } ?>
      </div>

    </div>

  </div>

  <?php //  close  connection; mysql_close(); ?>
  </br>

  <div id="footer">


    Copyright &copy; 2014-2015 7topics.com

  </div>

  <!-- Include FooterScripts -->
  <?php include_once "includes/footerScripts.php";?>

</body>

</html>