<?php

if (!empty($_POST["register-user"])) {

    require_once "dbcontroller.php";
    $db_handle = new DBController();
    $query = "INSERT INTO complaints (username,student_complaint) VALUES
		('" . $_POST["userName"] . "', '" . $_POST["Complaint"] . "')";
    $result = $db_handle->insertQuery($query);
    if (!empty($result)) {
        $error_message = "";
        $success_message = "Your complaint will be resolved as soon as possible!";

        unset($_POST);
    } else {
        $error_message = "Problem in submitting complaint. Try Again!";
    }

}
?>

<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<title>Student complain</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Include HeaderScripts -->
	<?php include_once "includes/headerScripts.php";?>

	<style>
		@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			-webkit-font-smoothing: antialiased;
			-moz-font-smoothing: antialiased;
			-o-font-smoothing: antialiased;
			text-rendering: optimizeLegibility;
		}

		body {
			font-family: "Open Sans", Helvetica, Arial, sans-serif;
			font-weight: 300;
			font-size: 12px;
			line-height: 30px;
			color: #777;
			background: #0CF;
		}

		.container {
			max-width: 400px;
			width: 100%;
			margin: 0 auto;
			position: relative;
		}

		#contact input[type="text"],
		#contact input[type="email"],
		#contact input[type="tel"],
		#contact input[type="url"],
		#contact textarea,
		#contact button[type="submit"] {
			font: 400 12px/16px "Open Sans", Helvetica, Arial, sans-serif;
		}

		#contact {
			background: #F9F9F9;
			padding: 25px;
			margin: 50px 0;
		}

		#contact h3 {
			color: #F96;
			display: block;
			font-size: 30px;
			font-weight: 400;
		}

		#contact h4 {
			margin: 5px 0 15px;
			display: block;
			font-size: 13px;
		}

		fieldset {
			border: medium none !important;
			margin: 0 0 10px;
			min-width: 100%;
			padding: 0;
			width: 100%;
		}

		#contact input[type="text"],
		#contact input[type="email"],
		#contact input[type="tel"],
		#contact input[type="url"],
		#contact textarea {
			width: 100%;
			border: 1px solid #CCC;
			background: #FFF;
			margin: 0 0 5px;
			padding: 10px;
		}

		#contact input[type="text"]:hover,
		#contact input[type="email"]:hover,
		#contact input[type="tel"]:hover,
		#contact input[type="url"]:hover,
		#contact textarea:hover {
			-webkit-transition: border-color 0.3s ease-in-out;
			-moz-transition: border-color 0.3s ease-in-out;
			transition: border-color 0.3s ease-in-out;
			border: 1px solid #AAA;
		}

		#contact textarea {
			height: 100px;
			max-width: 100%;
			resize: none;
		}

		#contact button[type="submit"] {
			cursor: pointer;
			width: 100%;
			border: none;
			background: #0CF;
			color: #FFF;
			margin: 0 0 5px;
			padding: 10px;
			font-size: 15px;
		}

		#contact button[type="submit"]:hover {
			background: #09C;
			-webkit-transition: background 0.3s ease-in-out;
			-moz-transition: background 0.3s ease-in-out;
			transition: background-color 0.3s ease-in-out;
		}

		#contact button[type="submit"]:active {
			box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
		}

		#contact input:focus,
		#contact textarea:focus {
			outline: 0;
			border: 1px solid #999;
		}

		:ebkit-input-placeholder {
			color: #888;
		}

		:-moz-placeholder {
			color: #888;
		}

		::-moz-placeholder {
			color: #888;
		}

		:-ms-input-placeholder {
			color: #888;
		}

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

		.demo-table {
			background: #d9eeff;
			width: 120%;
			border-spacing: initial;
			margin: 2px 0px;
			word-break: break-word;
			table-layout: auto;
			line-height: 1.8em;
			color: #333;
			border-radius: 4px;
			padding: 0px 40px;
		}

		.demo-table td {
			padding: 15px 0px;
		}

		.demoInputBox {
			padding: 10px 30px 10px 100px;
			border: #a9a9a9 1px solid;
			border-radius: 4px;

		}

		.btnRegister {
			padding: 10px 30px;
			background-color: #3367b2;
			border: 0;
			color: #FFF;
			cursor: pointer;
			border-radius: 4px;
			margin-left: 10px;
		}
	</style>
</head>

<body>

	<form id="contact" action="" method="post">
		<h3>Complaint Form</h3>
		<h4>Contact us today, and get reply with in 24 hours!</h4>
		<?php if (!empty($success_message)) {?>
		<div class="success-message"><?php if (isset($success_message)) {
    echo $success_message;
}
    ?></div>
		<?php }?>
		<?php if (!empty($error_message)) {?>
		<div class="error-message"><?php if (isset($error_message)) {
    echo $error_message;
}
    ?></div>
		<?php }?>
		<!--
<tr>
<td>User Name</td>
<td><input type="text" class="demoInputBox" name="userName" value="<?php if (isset($_POST['userName'])) {
    echo $_POST['userName'];
}
?>"></td>
</tr>
<tr>
<td>Feedback</td>
<td><input type="text" class="demoInputBox" name="feedBack" value="<?php if (isset($_POST['feedBack'])) {
    echo $_POST['feedBack'];
}
?>"></td>
</tr>
<td>
<input type="submit" name="register-user" value="Submit" class="btnRegister">
</td>
</table>
-->
		<fieldset>
			<input placeholder="Username" type="text" name="userName" value="<?php if (isset($_POST['userName'])) {
    echo $_POST['userName'];
}
?>" tabindex="1" required>
		</fieldset>
		<fieldset>
			<textarea placeholder="Type your issue here...." name="Complaint" value="<?php if (isset($_POST['Complaint'])) {
    echo $_POST['Complaint'];
}
?>" tabindex="2" required></textarea>
		</fieldset>
		<input type="submit" name="register-user" value="Submit" class="btnRegister">
	</form>

	<!-- Include FooterScripts -->
	<?php include_once "includes/footerScripts.php";?>

</body>

</html>