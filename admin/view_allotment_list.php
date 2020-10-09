<?php

//--------------------------------->> DB CONFIG
require_once "../config/configPDO.php";

//--------------------------------->> START SESSION
session_start();

//--------------------------------->> START SESSION
if (!isset($_SESSION["admin"])) {
    header("location: admin_login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HOSTEL MANAGEMENT SYSTEM | ALLOTMENT</title>

  <!-- Include HeaderScripts -->
  <?php include_once "../includes/headerScripts.php";?>
  <link rel="stylesheet" href="../css/common.css">


</head>

<body>

<!-- Include Admin Navbar -->
  <?php include_once "../includes/adminNavbar.php";?>


   <div class="container">
        <div class="row">
            <section class="col-md-12">

                <div class="table-responsive">

                    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">


                        <thead>
                            <tr class="tableizer-firstrow">
                                <th>Username</th>
                                <th>Email</th>
                                <th>First Name </th>
                                <th>Lastname</th>
                                <th>Gender</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

try {

    # Sql Query
    $sql = "SELECT * FROM user_information";

    # Prepare Query
    $result = $conn->prepare($sql);

    # Execute Query
    $result->execute();

    # Checking Wether Count Greater than 0
    if ($result->rowCount() > 0) {

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            ?>

                            <tr>
                                <td><?php echo $row["userName"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["firstName"]; ?></td>
                                <td><?php echo $row["lastName"]; ?></td>
                                <td><?php echo $row["gender"]; ?></td>
                            </tr>


                            <?php

        }

        ?>

                        </tbody>
                    </table>

                    <?php

    } else {
        echo "<tr><td colspan='4'>No Records Found</td></tr>";
    }

} catch (PDOException $e) {
    echo "<script>alert('We are sorry, there seems to be a problem with our systems. Please try again.');</script>";
    # Development Purpose Error Only
    echo "Error " . $e->getMessage();
}

?>
                </div>

            </section>
        </div>
    </div>




        <!-- Include FooterScripts -->
        <?php include_once "includes/footerScripts.php";?>

    </body>

</html>