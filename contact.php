<?php
//--------------------------------->> DB CONFIG
require_once "config/configPDO.php";

//--------------------------------->> SESSION START
session_start();

//--------------------------------->> CHECK USER
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

?>



<!DOCTYPE html>
<html>

<head>
    <title>HOSTEL MANAGEMENT SYSTEM | CONTACT US</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Include HeaderScripts -->
    <?php include_once "includes/headerScripts.php";?>

</head>

<body>

    <!-- Include Navbar -->
    <?php include_once "includes/navbar.php";?>


    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 offset-md-3">


                <div class="text-center mb-5">
                    <h3 class="text-center font-Staatliches alert-info"><i class="fas fa-star"></i> Address</h3>
                    <h5 class="font-sans">
                        National Institute of Technology Raipur <br />
                        G.E. Road, Raipur<br>
                        Chhatisgarh - 492010
                    </h5>
                </div>

                <div class="text-center mb-5">
                    <h3 class="text-center font-Staatliches alert-info"><i class="fas fa-star"></i> Examination Section
                    </h3>
                    <h5 class="font-sans"><i class="fas fa-phone"></i>
                        0771-6534775
                    </h5>
                </div>


                <div class="text-center mb-5">
                    <h3 class="text-center font-Staatliches alert-info"><i class="fas fa-star"></i> Student Section</h3>
                    <h5 class="font-sans"><i class="fas fa-phone"></i>
                        +91-9039006447
                    </h5>
                </div>

                <div class="text-center mb-5">
                    <h3 class="text-center font-Staatliches alert-info"><i class="fas fa-star"></i> Establishment
                        Section
                    </h3>
                    <h5 class="font-sans"><i class="fas fa-phone"></i>
                        +91-9039006448
                    </h5>
                </div>

            </div>
        </div>
    </div>


    <!-- Include FooterScripts -->
    <?php include_once "includes/footerScripts.php";?>

</body>

</html>