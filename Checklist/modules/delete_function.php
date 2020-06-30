<?php
require '../function.php';

if (isset($_POST)) {
	DeleteCheck($_POST['ID']);
}
//delete specific check function
function DeleteCheck($id){
	$conn = openDatabaseConnection();
	$query = $conn->prepare("DELETE FROM `checklist` WHERE ID=:id");
	$query->execute([':id'=>$id]);
	$conn = NULL;
	header('location:../index.php');
}

?>