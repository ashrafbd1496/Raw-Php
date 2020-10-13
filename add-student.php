
<?php include_once "app/db.php"; ?>
<?php include_once "app/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Student</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	<?php

	

/**
 * Student form data manage
 */

if( isset($_POST['add-student'])){

    //Value get
     $name = $_POST['name'];
     $email = $_POST['email'];
     $cell = $_POST['cell'];
     $age = $_POST['age'];
     $location = $_POST['location'];

     //Gender issetting
     if (isset($_POST['gender'])) {
     	 $gender = $_POST['gender'];
     }
    
 

    	//Upload File Management
     /**
    	$photo = $_FILES['photo']['name'];
   		$tmp_photo = $_FILES['photo']['tmp_name'];

   		*/

   		


   		//Form validation


    if( empty($name) || empty($email) || empty($cell) || empty($age) || empty($location) || empty($_POST['gender']) || empty($_FILES['photo']['tmp_name']) ){

        $mess = '<p class = "alert alert-danger mt-5 w-50 mx-auto ">All fields are required ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $mess = '<p class = "alert alert-danger mt-5 w-50 mx-auto ">Invalid email address  ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';

    }elseif ($age < 20 || $age > 80) {

    	$mess = '<p class = "alert alert-warning mt-5 w-50 mx-auto ">Your age is not okey for this app ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';
    }

    else{

    	$data =  fileUpload($_FILES['photo'], 'students/', ['jpg','png','gif','jpeg','webp']);
    		/**[	
    			'type' 	=> 'file',
    			 'file_name' 	=> 'javascript',
    			 'fname' 	=> $name,
    			'lname' 	=> $location


    		] */ 

    	$photo = $data['file_name'];

    	if (!empty($data['mess'])) {
    		$mess = $data['mess'];

    	}else{
    		$sql = "INSERT INTO students (name,email,cell,age,location, gender,photo,status) VALUES ('$name','$email','$cell','$age','$location','$gender','$photo','active') ";

    		$connection -> query($sql);

    		$mess = '<p class = "alert alert-success mt-5 w-50 mx-auto ">Student Added Successfully ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';


    	}



    		


    	// echo $data['file_name'];

    	//if we want to upload more format file without default format
    	//$mess =  fileUpload($_FILES['photo'], 'students/', ['js','svg']);

    }

}


?>


	<div class="wrap shadow">
		<a class="btn btn-success btn-sm" href="index.php">All Students</a>
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>


                <?php
                 if( isset($mess)) {
                     echo $mess;
                 }

                ?>


				<form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>

					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text">
					</div>

					<div class="form-group">
						<label for="">Location</label>
						<select class="form-control" name="location" id="">
							<option value="">Select</option>
							<option value="Mirpur">Mirpur</option>
							<option value="Banani">Banani</option>
							<option value="Uttara">Uttara</option>
							<option value="Bashundhara">Bashundhara</option>
							<option value="Gulsan">Gulsan</option>
						</select>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Gender</label><br>
						<input value="Male" name = gender class="" type="radio" id = "male"><label for = "male">Male</label>
						<input value="Female" name = gender class="" type="radio" id = "female"><label for = "female">Female</label>
					</div>
					
					
					<div class="form-group">
						<label for="">Photo</label>
						<input name="photo" class="" type="file">
					</div>
					

					<div class="form-group">
						<input name="add-student" class="btn btn-primary" type="submit" value="Add Student">
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