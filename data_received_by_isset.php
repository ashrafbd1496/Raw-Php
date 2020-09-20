<?php 


	if (isset($_POST['signup'])) {

		echo $name =  $_POST['naam'];
		echo $hayat =  $_POST['boyos'];
	

	}

	

 ?>





		<form action="" method="POST">
			<input type="text" name="naam" placeholder="Name">
			<!-- <input type="text" name="email" placeholder="Email"> -->
			<input type="text" name="boyos" placeholder="Age">
			<!-- <input type="text" name="pass" placeholder="Password"> -->
			<input name ="signup" type="submit" value="Sign Up">
		</form>
