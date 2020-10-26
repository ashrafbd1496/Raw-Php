<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prepare and PDO</title>

	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	<?php 

	//Database Connection
	// $connect = new mysqli('localhost', 'root', '','pdo');

	 $connect = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

// 	if ($connect -> connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
 
		//Data form manage
		if (isset($_POST['data'])) {

	   $fname = $_POST['fname'];
	   $lname = $_POST['lname'];
	   $cell = $_POST['cell'];
	  

	   //for PDO connection 
   $sql = "INSERT INTO users (fname, lname, cell) VALUES (?, ?, ?)";

   $stmt = $connect -> Prepare($sql);
   $stmt -> bind_param("sss", $fname, $lname, $cell); //tihis style bind used for mysqli connection
  $stmt -> execute();


   $mess = '<p class = "alert alert-success mt-5 w-50 mx-auto ">Student Added Successfully ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';


}

	 ?>

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>

				<?php
                 if( isset($mess)) {
                     echo $mess;
                 }

                ?>

				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">

					<div class="form-group">
						<label for="">First Name</label>
						<input name="fname" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Last Name</label>
						<input name="lname" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					
					<div class="form-group">
						<input name="data" class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>