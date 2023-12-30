<?php 
include_once("./session_start.php");
include_once("../panel/DB.php");
if($_SESSION["fname"] == ""){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Eazy Parcels | Registeration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>

<body oncontextmenu="return false;">

	
    <!-- Page Loader -->
<div class="loader"></div>

	<div  class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="./assets/register.php" enctype="multipart/form-data" method="POST">
					<span class="login100-form-title">
						Member Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input required class="input100" type="text" name="fname" placeholder="First Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input required class="input100" type="text" name="lname" placeholder="Last Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input required class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input required class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						
						<input required class="input100" type="text" name="username" placeholder="User Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-o" aria-hidden="true"></i>
						</span>
					</div>

					<div style="background-color: #fff!important; border-radius: 50px;" class="wrap-input100 validate-input p-1" data-validate = "Password is required">
						<label for="upload-photo" id="lb">Choose File</label>
						<input required class="input100" type="file" id="upload-photo" name="userimg">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-image" aria-hidden="true"></i>
						</span>
					</div>

					 <!-- Custom Editing For input type File  -->
					<style>

						#lb {
							cursor: pointer;
							padding-left: 63px !important;
							padding-top: 7px !important;
							color: rgb(151, 147, 145) !important;
							/* Style as you please, it will become the visible UI component. */
}
						#upload-photo{
							opacity: 0;
							border: 2px solid orange !important;
							position: absolute;
						}

					</style>
					
					<div class="container-login100-form-btn">
						<a href="" class="login100-form-btn">
							<button style="background-color: transparent ;" type="submit" name="submit" class="login100-form-btn">
								Register
							</button>
						</a>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Have an Account ? 
						</span>
						<a class="txt2" href="../index.php">
							Login
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="../loader.js"></script>

</body>
</html>
    <?php
    
  } 
  else {
    ?>

      <script>
        window.location.assign("../index.php");
      </script>

    <?php
  }
    ?>