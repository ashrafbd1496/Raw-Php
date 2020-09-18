<!DOCTYPE html>
<html>
<head>
	<title>Signup Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 

	/**
	
	* Signup form validation

	*/

	if (isset($_POST['signup'])) {

		//value received

		 $name = $_POST['name'];
		 $email = $_POST['email'];
		$age = $_POST['age'];
		 $password = $_POST['password'];
	}

	if (empty($name) || empty($email) || empty($age) || empty($password)) {
		$mess = "<span class='fill'>Fill all the form field</span>";
	}else{
		$mess= "<span class = 'success'>Sing Up successfull</span>";
	}

	 ?>


	<div class="reg">
		<h2>Sign Up</h2>

		
		<?php echo $mess ?>

		<form action="" method="POST">
			<input type="text" name="name" placeholder="Name">
			<input type="text" name="email" placeholder="Email">
			<input type="text" name="age" placeholder="Age">
			<input type="text" name="password" placeholder="Password">
			<input name ="signup" type="submit" value="Sign Up">
		</form>
	</div> 
		


</body>
</html>