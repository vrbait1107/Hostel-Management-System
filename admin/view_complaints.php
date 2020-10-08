<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Feedback</title>

<!-- Include HeaderScripts -->
<?php include_once "includes/headerScripts.php";?>

</head>

<div class="panel panel-primary" style="color:#26aae1;">
    <div class="panel-heading" style="background:#d3eef9; text-align:center;font-weight:bold;font-size:30px;"><i
            class="fa fa-bars" style="background:#26aae1;color:white; " aria-hidden="true"></i> Student Complaints</div>
    <br>

    <body>

        <div class="table-scrol">


            <div class="table-responsive">
                <!--this is used for responsive display in mobile and other devices-->


                <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">

                    <thead style="background:#26aae1;">
                        <tr class="tableizer-firstrow">
                            <th> Name </th>
                            <th> Complaints </th>
                        </tr>
                    </thead>


                    <?php
include "Db_conection.php";
$view_users_query = "select * from complaints"; //select query for viewing users.
$run = mysqli_query($dbcon, $view_users_query); //here run the sql query.

while ($row = mysqli_fetch_array($run)) //while look to fetch the result and store in a array $row.
{
    $user_name = $row[0];
    $user_feed = $row[1];

    ?>

                    <tr>
                        <!--here showing results in the table -->
                        <td><?php echo $user_name; ?></td>
                        <td><?php echo $user_feed; ?></td>


                    </tr>

                    <?php }?>

                </table>
            </div>
        </div>

        <!-- Include FooterScripts -->
        <?php include_once "includes/footerScripts.php";?>

    </body>

</html>