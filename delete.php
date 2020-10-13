<?php 
/**
	 * Database connection
	 */	
include_once "app/db.php";
include_once "app/functions.php";


if (isset($_GET['id'])) {
	echo $id = $_GET['id'];
}

$sql = "DELETE FROM students WHERE id = '$id' ";
$connection -> query($sql);

//to redirect index.php page
header("location:index.php");








 ?>