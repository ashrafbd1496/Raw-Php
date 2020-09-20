<?php 

	$name =  $_POST['naam'];
	$emal =  $_POST['email'];
	$hayat =  $_POST['boyos'];
	$pas =  $_POST['pass'];

	echo $name;

	echo "<br>";
	echo "<br>";

	echo "My name is $name and my email $email . My age is $hayat";

 ?>






		<form action="" method="POST">
			<input type="text" name="naam" placeholder="Name">
			<input type="text" name="email" placeholder="Email">
			<input type="text" name="boyos" placeholder="Age">
			<input type="text" name="pass" placeholder="Password">
			<input name ="signup" type="submit" value="Sign Up">
		</form>
