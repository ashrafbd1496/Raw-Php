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
	if (isset($_POST['upload'])) {

		 $photo_name = $_FILES['photo']['name'];
		 $photo_tmp = $_FILES['photo']['tmp_name'];

		 $photo_upload = time().$photo_name;

		move_uploaded_file($photo_tmp, 'files/' . $photo_upload);
	}
 
 ?>


	<div class="container">

		<div class="log w-50 mx-auto mt-5">
			<div class="card shadow">
				<div class="card-header">
					<h3>Profile Photo</h3>
				</div>
				<div class="card-body">
					<form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method = "POST" enctype = "multipart/form-data" >

						<div class="form-group">
							<label for="">Upload Photo</label>
							<input type="file" name="photo" class="form-control">
						</div>


						<div class="form-group">
							<input type="submit" name="upload" class="btn btn-primary" value="Upload Now">
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