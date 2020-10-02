<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File Upload Program</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	

	<!--
	*Assingment - 

	 Create a unique file upload function like below- uploadFile($file_name,$file_tmp_name,’folder-name’, [ ‘docx’, ‘pdf’ ], ‘dt/enc’ )

	  -->
	

	<?php 

	if (isset($_POST['signup'])) {


		//Data Recieve


		$first_name = $_POST['fname'];
		$last_name = $_POST['lname'];

		//Profile Photo

		$file_name = $_FILES['photo']['name'];
		$file_tmp_name = $_FILES['photo']['tmp_name'];
		$file_size = $_FILES['photo']['size'];

		//file size conversion

		$size = (($file_size/1024)/1024);

		//Unique File Name . This format used for cv, video, audio etc

		$unique_file_name = Date('F_d_Y_g_h_s'). $file_name; 

		//For profile picture - we can use this type's format as below-

		 $unique_file_name = $file_name;

		//file name extention- 

		$file_name_array = explode('.', $file_name);

		$file_name_extension = end($file_name_array);

		//to convert the file extersion to lowercase like - PNG to png
		$file_name_extension_low = strtolower($file_name_extension);

		// echo "<pre>";
		// print_r($file_name_extension);


		// echo "<br>";
		 $unique_file_name = md5(time().rand(0,1000000)).'.'.$file_name_extension_low;

		 //for pdf cv or video 
		 $students_cv = Date('F_d_Y_g_h_s'). $first_name .'_' . $last_name .'_'. $file_name;

		 // for the cv we can add text CV inside the file name  like below- 
		 $students_cv = Date('F_d_Y_g_h_s'). '_'. $first_name .'_' . $last_name .'_'. 'CV' .'_' . $file_name;


		 //we can solve the space problem inside the file name like below-
		 // echo "<pre>";

		 

		 $file_name = str_replace(' ', '_', $file_name);

		 
		 $students_cv = Date('F_d_Y_g_h_s'). '_'. $first_name .'_' . $last_name .'_'. 'CV' .'_' . $file_name;

		//File Upload


		 if (empty($first_name) || empty($last_name) || empty($file_name)) {

		 					$message = '<p class = "alert alert-danger mt-5 w-50 mx-auto ">All fields are required ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';

		 	
		 }elseif (in_array($file_name_extension, ['docx', 'pdf']) == false) {

		 	$message = '<p class = "alert alert-warning mt-5 w-50 mx-auto ">Cv file format is invalid !  <button data-dismiss = "alert" class = "close">&times;</button> </p>';
		 	
		 }elseif ($size > 1) {
		 	$message = '<p class = "alert alert-warning mt-5 w-50 mx-auto ">File size exceeded the limit !   <button data-dismiss = "alert" class = "close">&times;</button> </p>';
		 }

		 /**elseif ($file_name_extension_low != 'docx' && 'pdf'){
		 	
		 	$message = '<p class = "alert alert-warning mt-5 w-50 mx-auto ">Cv file format is invalid !  <button data-dismiss = "alert" class = "close">&times;</button> </p>';
		 }
		 */

		 else{
		 	move_uploaded_file($file_tmp_name, 'Cv/' .  $students_cv);

		 	$message = '<p class = "alert alert-success mt-5 w-50 mx-auto ">File Upload Successfull <button data-dismiss = "alert" class = "close">&times;</button> </p>';

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
					<h3>Profile Photo</h3>
				</div>
				<div class="card-body">
					<form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method = "POST" enctype = "multipart/form-data" >

						<div class="form-group">
							<label for="">First Name</label>
							<input type="text" name="fname" class="form-control">
						</div>

						<div class="form-group">
							<label for="">Last Name</label>
							<input type="text" name="lname" class="form-control">
						</div>

						<div class="form-group">
							<label for="">Profile Picture</label>
							<input type="file" name="photo" class="form-control">
						</div>



						<div class="form-group">
							<input type="submit" name="signup" class="btn btn-primary" value="Sign Up">
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