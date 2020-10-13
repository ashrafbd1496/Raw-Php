
<?php include_once "app/db.php"; ?>
<?php include_once "app/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Student</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	<?php

		if (isset($_GET['id'])) {
	$id_url = $_GET['id'];
	}

/**
 * Student form data manage
 */

if( isset($_POST['update-student'])){

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


    if( empty($name) || empty($email) || empty($cell) || empty($age) || empty($location) || empty($_POST['gender']) ){

        $mess = '<p class = "alert alert-danger mt-5 w-50 mx-auto ">All fields are required ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $mess = '<p class = "alert alert-danger mt-5 w-50 mx-auto ">Invalid email address  ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';

    }elseif ($age < 20 || $age > 80) {

    	$mess = '<p class = "alert alert-warning mt-5 w-50 mx-auto ">Your age is not okey for this app ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';
    }

    /**
     * 
 
    else{

    	$data =  fileUpload($_FILES['photo'], 'students/', ['jpg','png','gif','jpeg','webp']);
    		/**[	
    			'type' 	=> 'file',
    			 'file_name' 	=> 'javascript',
    			 'fname' 	=> $name,
    			'lname' 	=> $location


    		] */ 

    		/**
    	$photo = $data['file_name'];

    	if (!empty($data['mess'])) {
    		$mess = $data['mess'];

    	}
    	    */

    	// else{
    	// 	$sql = "INSERT INTO students (name,email,cell,age,location, gender,photo,status) VALUES ('$name','$email','$cell','$age','$location','$gender','$photo','active') ";


    		else{

    			if (isset($_FILES['new_photo']['name'])) {

    				$data = fileUpload($_FILES['new_photo'], 'students/');

    				$photo_name = $data['file_name'];

    				unlink('students/'.$_POST['old_photo']);

    			}else{
    				$photo_name = $_POST['old_photo'];
    			}



    			$sql = "UPDATE students SET 
    			name = '$name' ,
    			email = '$email' ,
    			cell = '$cell' ,
    			age = '$age',
    			location = '$location',
    			gender = '$gender',
    			photo = '$photo_name'  WHERE id = '$id_url';
    			";

    		$connection -> query($sql);

    		$mess = '<p class = "alert alert-success mt-5 w-50 mx-auto ">Student data updated Successfully ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';


    	}


    	// echo $data['file_name'];

    	//if we want to upload more format file without default format
    	//$mess =  fileUpload($_FILES['photo'], 'students/', ['js','svg']);

    }
    /**
	 * Single student data by ID
	 */


	$sql = "SELECT * FROM students WHERE id = '$id_url' ";
	
	$data = $connection -> query($sql);
	$single_data = $data -> fetch_assoc();


?>

	<div class="wrap shadow">
		<a class="btn btn-success btn-sm" href="index.php">All Student</a>
		<div class="card">
			<div class="card-body">
				<h2>Update Student Data</h2>


                <?php
                 if( isset($mess)) {
                     echo $mess;
                 }

                ?>


				<form action="<?php echo $_SERVER['PHP_SELF'] ?>?id=<?php echo $id_url; ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text" value="<?php echo $single_data['name']; ?>">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text" value="<?php echo $single_data['email']; ?>">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text" value="<?php echo $single_data['cell']; ?>">
					</div>

					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text" value="<?php echo $single_data['age']; ?>">
					</div>

					<div class="form-group">
						<label for="">Location</label>
						<select class="form-control" name="location" id="">
							<option value="">Select</option>
							<option <?php if($single_data['location'] == 'Mirpur'): echo "selected"; endif; ?> value="Mirpur">Mirpur</option>
							<option <?php if($single_data['location'] == 'Banani'): echo "selected"; endif; ?> value="Banani">Banani</option>
							<option <?php if($single_data['location'] == 'Uttara'): echo "selected"; endif; ?> value="Uttara">Uttara</option>
							<option <?php if($single_data['location'] == 'Bashundhara'): echo "selected"; endif; ?> value="Bashundhara">Bashundhara</option>
							<option <?php if($single_data['location'] == 'Gulsan'): echo "selected"; endif; ?> value="Gulsan">Gulsan</option>
						</select>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Gender</label><br>
						<input value="Male" name = gender <?php if ($single_data['gender'] == 'Male'): echo "checked";  endif; ?> class="" type="radio" id = "male"><label for = "male">Male</label>
						<input value="Female" name = gender <?php if ($single_data['gender'] == 'Female'): echo "checked"; endif; ?> class="" type="radio" id = "female"><label for = "female">Female</label>
					</div>
					
					<div class="form-group">
						<img style="width: 100px;" src="students/<?php echo $single_data['photo']; ?>" alt="student photo">
						<input name="old_photo" value="<?php echo $single_data['photo']; ?>" type="hidden">
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="new_photo" class="" type="file">
					</div>
					

					<div class="form-group">
						<input name="update-student" class="btn btn-primary" type="submit" value="Update">
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