<?php
require '../function.php';

if(isset($_POST)){
	CreateList();
	// var_dump($_POST);
}
// creeërt een list
function CreateList(){
	$conn = openDatabaseConnection();
	$query = $conn->prepare(
		'INSERT INTO `list` (`id`, `name`)
							VALUES
								 (
									NULL,
								 "'.$_POST['Name'].'"
								 )'
							);
	$query->execute();
	$conn = NULL;
	header('location:../index.php');
}
?>