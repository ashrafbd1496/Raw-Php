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

	


	

	<?php 

	/**
	//Primary juga use hoto- 
	
	mysql_connect();
	mysql_select_db();

	//Procedural way
	mysqli_connect();

	// OOP

	new mysqli();
	New PDO();

	//satement

		#query();
		#prepare();

	
	*/

	// echo "test";
	//Database connection

	//$connection = new mysqli('localhost','root','','my_db1');

	//created database like below way

	// $connection -> query("CREATE DATABASE my_db1");

	//create table like this way

	/**

	$sql = "CREATE TABLE students(

	sl int(10),

	name varchar(100),

	cell varchar(13),

	location varchar(50)



)";


*/

/**

	$sql = "INSERT INTO students (sl, name, cell, location) VALUES ('1', 'ashraf uddin', '01838514833','chittagong')";

	$connection -> query($sql);

	*/

	//database connection

	$connection = new mysqli('localhost','root', '', 'my_db1');


	if (isset($_POST['add'])) {

		//form data receive

		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$cell = $_POST['cell'];

		//validation
		$validation ='';

		if (empty($name) || empty($roll) || empty($cell)) {

			$validation ='<p class = "alert alert-danger mt-5 w-50 mx-auto ">All fields are required ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';
		}else{

			$connection -> query("INSERT INTO students(name,roll,cell) VALUES('$name', '$roll', '$cell')");
 
			$validation = '<p class = "alert alert-success mt-5 w-50 mx-auto "> Student Added Successful ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';

		}

	}



	?>


	<div class="container">


			<?php 

				if (isset($validation)) {
					echo $validation;
				}
			 ?>

		<div class="log w-50 mx-auto mt-5">
			<div class="card shadow">
				<div class="card-header">
					<h3>Add New Students</h3>
				</div>
				<div class="card-body">
					<form action="" method = "POST">

						<div class="form-group">
	
							<input type="text" name="name" class="form-control" placeholder="Student Name">
						</div>

						<div class="form-group">
						
							<input type="text" name="roll" class="form-control" placeholder="Student Roll">
						</div>

						<div class="form-group">
						
							<input type="text" name="cell" class="form-control" placeholder="Student cell">
						</div>



						<div class="form-group">
							<input type="submit" name="add" class="btn btn-primary" value="Add Student">
						</div>
						

					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="data">
		<h2>All Students</h2>
		<hr>

		<table>
			<tr>
				<th>Sl</th>
				<th>Name</th>
				<th>Roll</th>
				<th>Cell</th>
			</tr>

			<?php  

				$sql = "SELECT * FROM students";
				$student_data = $connection -> query($sql);

				while( $row = $student_data -> fetch_assoc() ) { 

			

			?>



			
			<tr>
				<td><?php echo $row['sl']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['roll']; ?></td>
				<td><?php echo $row['cell']; ?></td>
			</tr>

				<?php } ?> 
			
		</table>

	
		<!-- <?php 

		//we can collect data in 3 way- #fetcth_array(), fetch_assoc(), fetch_boject()

		//$student_data = $connection -> query("SELECT name,roll,cell FROM students");

		//To select all the column we can use * symbol like below- 
		//$student_data = $connection -> query("SELECT * FROM students");




		
		//echo "<pre>";

		//print_r($student_data -> fetch_assoc());- it will show data as indexed array and double index 


		//print_r($student_data -> fetch_assoc()); //its show data as associative array

		//print_r($student_data -> fetch_object());

		/**
		while ($portion = $student_data -> fetch_object()) {

			echo $portion -> name ;
			echo $portion -> roll ;
			echo $portion -> cell ;

			echo "<hr>";
		}
	*/


		 ?> -->

	</div>






	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>