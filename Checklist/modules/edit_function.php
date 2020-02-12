<?php
require 'function.php';



if(isset($_POST)){
    EditCheck($id);
}
function EditCheck(){
	$conn = openDatabaseConnection();
	$query = $conn->prepare('SELECT * FROM `checklist` ');
	$query->execute();
	$result = $query->fetchAll();
	return $result;
	$conn = NULL;
}





?>