<?php

if (!empty($_POST["register-user"])) {
    /* Form Required Field Validation */
    foreach ($_POST as $key => $value) {
        if (empty($_POST[$key])) {
            $error_message = "All Fields are required";
            break;
        }
    }
    /* Password Matching Validation */
    if ($_POST['password'] != $_POST['confirmPassword']) {
        $error_message = 'Passwords should be same<br>';
    }

    /* Email Validation */
    if (!isset($error_message)) {
        if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
            $error_message = "Invalid Email Address";
        }
    }

    /* Validation to check if gender is selected */
    if (!isset($error_message)) {
        if (!isset($_POST["gender"])) {
            $error_message = " All Fields are required";
        }
    }

    /* Validation to check if Terms and Conditions are accepted */
    if (!isset($error_message)) {
        if (!isset($_POST["terms"])) {
            $error_message = "Accept Terms and Conditions to Register";
        }
    }

    if (!isset($error_message)) {
        require_once "dbcontroller.php";
        $db_handle = new DBController();
        $query = "INSERT INTO registered_users (user_name, first_name, last_name, password, email, gender) VALUES
		('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . md5($_POST["password"]) . "', '" . $_POST["userEmail"] . "', '" . $_POST["gender"] . "')";
        $result = $db_handle->insertQuery($query);
        if (!empty($result)) {
            $error_message = "";
            $success_message = "You have registered successfully!";
            $sql = "INSERT INTO login(username,password) VALUES('" . $_POST["userEmail"] . "','" . md5($_POST["password"]) . "')";

            $result1 = $db_handle->insertQuery($sql);
            unset($_POST);
        } else {
            $error_message = "Problem in registration. Try Again!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP User Registration Form</title>

	<!-- Include HeaderScripts -->
	<?php include_once "includes/headerScripts.php";?>

	<style>
		.error-message {
			padding: 7px 10px;
			background: #fff1f2;
			border: #ffd5da 1px solid;
			color: #d6001c;
			border-radius: 10px;
			width: 120%;
		}

		.success-message {
			padding: 7px 10px;
			background: #cae0c4;
			border: #c3d0b5 1px solid;
			color: #027506;
			border-radius: 10px;
			width: 120%;
		}
	</style>
</head>

<body>

	<!-- Include Navbar -->
	<?php include_once "includes/authNavbar.php";?>


	<div class="container my-5">
		<div class="row">

			<div class="col-md-6 offset-md-3">

				<h3 class="font-time  text-center text-uppercase">Register Here</h3>

				<div class="form-group">
					<label for="userName">Username</label>
					<input type="text" name="userName" id="userName" class="form-control"
						placeholder="Enter Your Username">
				</div>

				<div class="form-group">
					<label for="userEmail">Email</label>
					<input type="email" name="userEmail" id="userEmail" class="form-control"
						placeholder="Enter Your Username">
				</div>


				<div class="form-group">
					<label for="firstName">First Name</label>
					<input type="text" name="firstName" id="firstName" class="form-control"
						placeholder="Enter Your Username">
				</div>

				<div class="form-group">
					<label for="lastName">Last Name</label>
					<input type="text" name="lastName" id="lastName" class="form-control"
						placeholder="Enter Your Username" aria-describedby="helpId">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control"
						placeholder="Enter Your Username" aria-describedby="helpId">
				</div>

				<div class="form-group">
					<label for="confirmPassword">Confirm Password</label>
					<input type="password" name="confirmPassword" id="confirmPassword" class="form-control"
						placeholder="Enter Your Username" aria-describedby="helpId">
				</div>



				<div class="form-group">
					<label for="gender">Gender</label>

					<div class="form-check">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="gender" id="gender" value="Male">
							Male
						</label>
					</div>

					<div class="form-check">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="gender" id="gender" value="Female">
							Female
						</label>
					</div>

				</div>


				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
						I accept Terms and Conditions
					</label>
				</div>

				<button type="submit" name="register-user" id="register-user"
					class="btn btn-primary mt-3">Submit</button>


			</div>
		</div>
	</div>

	<!-- Include FooterScripts -->
	<?php include_once "includes/footerScripts.php";?>

</body>

</html>