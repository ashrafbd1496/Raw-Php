<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


	<?php 


	if (isset($_POST['register'])) {
		/**
			*Get all data
		*/

			 $name = $_POST['fname'];
			$email = $_POST['email'];
			$password = $_POST['pass'];

			//email explode
			$xpld_email = explode('@', $email);
			$valid_email = end($xpld_email);



			if (empty($name) || empty($email) || empty($password)) {

				$message = '<p class = "alert alert-danger mt-5 w-50 mx-auto ">All fields are required ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';

			}
			/**

			elseif($valid_email != 'webdevbd.com'){

				$message = '<p class = "alert alert-warning mt-5 w-50 mx-auto ">Your Email sholud be a  webdevbd email ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';


			}
			*/

			elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == false){

				$message = '<p class = "alert alert-danger mt-5 w-50 mx-auto ">Email must be a valid email <button data-dismiss = "alert" class = "close">&times;</button> </p>';


			}elseif(in_array($valid_email, ['webdevbd.com','ashrafulkareem.com','krishokdo']) == false){

				$message = '<p class = "alert alert-warning mt-5 w-50 mx-auto ">Your Email sholud be a  valid institute email ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';

			}


			else{

				$message = '<p class = "alert alert-success mt-5 w-50 mx-auto ">Registration Successfull <button data-dismiss = "alert" class = "close">&times;</button> </p>';

			}

	}




	 ?>











	<div class="container">

			<?php 

				if (isset($message)) {
					echo $message;
				}
			 ?>

		<div class="log w-50 mx-auto mt-5">
			<div class="card shadow">
				<div class="card-header">
					<h3>Registration Form</h3>
				</div>
				<div class="card-body">
					<form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method = "POST">

						<div class="form-group">
							<label for="">Full Name</label>
							<input type="text" name="fname" class="form-control">
						</div>

						<div class="form-group">
							<label for="">Email</label>
							<input type="text" name="email" class="form-control">
						</div>
						
						
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" name="pass" class="form-control">
						</div>

						<div class="form-group">
							<input type="submit" name="register" class="btn btn-primary" value="Sign Up">
						</div>
						

					</form>
				</div>
			</div>
		</div>
	</div>








	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>