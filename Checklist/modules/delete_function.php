<?php
require 'function.php';



if(isset($_POST)){
    DeleteCheck($id);
}
function DeleteCheck($id){
	$conn = openDatabaseConnection();
	$query = $conn->prepare("DELETE * FROM `checklist` WHERE id->:id");
	$query->execute();
	$result = $query->fetchAll();
	return $result;
	$conn = NULL;
}



?>