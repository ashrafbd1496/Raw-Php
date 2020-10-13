<?php include_once "app/db.php"; ?>
<?php include_once "app/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Day10 Database Table Join</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
<!-- 
	CRUDV

	C-create
	R-read
	U- update
	D- delete
	V-view -->

	<?php 

	//min max and avg below

	$sql = "SELECT MAX(price) as max_price FROM products";
	$max_data = $connection -> query($sql);
	$mxdata = $max_data -> fetch_assoc();

	//min price 

	$sql = "SELECT MIN(price) as min_price FROM products";
	$min_data = $connection -> query($sql);
	$mdata = $min_data -> fetch_assoc();

	/*	 NULL DATA 

	$sql = "SELECT * FROM customers WHERE cell IS NULL ";
	$min_data = $connection -> query($sql);
	$mdata = $min_data -> fetch_assoc();
*/

	 ?>


	<div class="wrap-table shadow">
		<a class="btn btn-success btn-sm" href="add-student.php">All Products</a>
		<div class="card">
			<div class="card-body">
				<h2>All Products Data</h2>
				<hr>
				Maximum price = <?php echo $mxdata['max_price']; ?>
				Minimum price = <?php echo $mdata['min_price']; ?>
				<hr>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
					<input class="" name="search" type="text" placeholder="Location/Gender/Name/Email">
					<input class="btn btn-sm btn-primary" name="search-btn" type="submit" value="Search">
				</form><br>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Customer Name</th>
							<th>Cell</th>
							<th>Location</th>
							<th>Product</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php 

							$search = "";

							if (isset($_POST['search-btn'])) {
								$search = $_POST['search'];
							}

							/**	we can create alias like below- 
							$sql = "SELECT name as naam, email, cell, age, location, photo FROM customers";
							*/

							$sql = "SELECT * FROM customers LEFT JOIN products ON customers.id = products.cid ";
							
 
							//$sql = "SELECT * FROM customers LEFT JOIN products ON customers.id = products.cid ";

							//$sql = "SELECT * FROM students WHERE location = '$search' OR gender = 'female' ";

							/**
							$sql = "SELECT * FROM students WHERE  age BETWEEN 20 AND 30 ";
							$sql = "SELECT * FROM students WHERE  location IN ('mirpur','uttara') ";
							$sql = "SELECT * FROM students WHERE  name LIKE '__a%' ";
							$sql = "SELECT * FROM students WHERE  name LIKE '_i%' ";
							$sql = "SELECT * FROM students WHERE  name LIKE '%r%' ";
							$sql = "SELECT * FROM students WHERE  name LIKE '%r' ";
							$sql = "SELECT * FROM students WHERE NOT location = 'mirpur' ";
							$sql = "SELECT * FROM students LIMIT 5";
							$sql = "SELECT * FROM students WHERE location = 'mirpur' AND gender = 'female' ";
							$sql = "SELECT * FROM students WHERE email = 'laboni@gmail.com' ";
							$sql = "SELECT * FROM students WHERE gender = 'Female' ";
							$sql = "SELECT * FROM students WHERE gender = 'Male' ";
							$sql = "SELECT * FROM students WHERE location = 'Mirpur' OR location = 'uttara' ";
							$sql = "SELECT * FROM students WHERE location = 'Mirpur' ";
							$sql = "SELECT * FROM students ORDER BY name ASC";
							$sql = "SELECT * FROM students ORDER BY age DESC";
							$sql = "SELECT * FROM students ORDER BY id DESC";

							*/
							

							//$sql = "SELECT * FROM students";
							// $data = $connection -> query($sql);

							
							
							//to fetch single data 
							//$single_data = $data  -> fetch_assoc();


							//id initialization
							$i=1;

							//to fetch all data- 
							while($single_data = $data  -> fetch_assoc()) :

						 ?>

						<tr>
							<td><?php echo $i ; $i++ ?></td>
							<td><?php echo $single_data['customer_name'] ?></td>
							<!-- *alias example below -->
							<!-- <td><?php echo $single_data['naam'] ?></td> -->

							<td><?php echo $single_data['cell'] ?></td>
							<td><?php echo $single_data['location'] ?></td>
							<td><?php echo $single_data['product_name'] ?></td>
							<td><?php echo $single_data['price'] ?></td>
							
							<td>
								<a class="btn btn-sm btn-info" href="single-student.php?id=<?php echo $single_data['id'] ?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo $single_data['id'];  ?>">Edit</a>
								<a id="del-btn" class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $single_data['id'] ?>">Delete</a>
							</td>
						</tr>
						
						<?php  endwhile; ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
	





	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		$('a#del-btn').click(function(){
			let con = confirm('Are you sure to delete ?');
			if (con ==  true) {
				return ture;
			}else{
				return false;
			}

		})
	</script>
</body>
</html>