<?php

//------------------------->> DB CONFIG
require_once "config/configPDO.php";

?>

<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<title>HOSTEL MANAGEMENT SYSTEM | STUDENT COMPLAINT</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Include HeaderScripts -->
	<?php include_once "includes/headerScripts.php";?>


</head>

<body>


	<?php

try {

    if (isset($_POST["submit"])) {

        # Avoid XSS Attack
        $userName = htmlspecialchars($_POST["userName"]);
        $complaint = htmlspecialchars($_POST["complaint"]);

        # Sql Query
        $sql = "INSERT INTO complaints (username,student_complaint) VALUES
			(:userName, :complaint)";

        # Prepare Query
        $result = $conn->prepare($sql);

        # Prepare Query
        $result = $conn->prepare($sql);

        # Binding Values
        $result->bindValue(":userName", $userName);
        $result->bindValue(":complaint", $complaint);

        # Execute Query
        $result->execute();

        if ($result) {
            echo "<script>Swal.fire({
						icon: 'success',
						title: 'Success',
						text: 'Your complaint will be resolved as soon as possible!'
					})</script>";

        } else {
            echo "<script>Swal.fire({
						icon: 'error',
						title: 'Error',
						text: 'Problem in submitting complaint. Try Again!'
					})</script>";
        }

    }

} catch (PDOException $e) {
    echo "<script>alert('We are sorry, there seems to be a problem with our systems. Please try again.');</script>";
    # Development Purpose Error Only
    echo "Error " . $e->getMessage();
}

?>


	<!-- Include User Navbar -->
	<?php include_once "includes/navbar.php";?>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">

				<h3 class="text-center font-Staatliches-heading">Complaint Form</h3>
				<hr />

				<h5 class="text-center font-sans mb-3">Contact us today, and get reply with in 24 hours!</h5>

				<form action="" method="post">

					<div class="form-group">
						<label for="">Username</label>
						<input type="text" name="userName" id="userName" class="form-control" placeholder=""
							aria-describedby="helpId">
					</div>

					<div class="form-group">
						<label for="complaint">Your Issue</label>
						<textarea class="form-control" name="complaint" id="complaint" rows="3"></textarea>
					</div>

					<button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>

				</form>
			</div>
		</div>
	</div>

	<!-- Include FooterScripts -->
	<?php include_once "includes/footerScripts.php";?>

</body>

</html>