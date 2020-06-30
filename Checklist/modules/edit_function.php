<?php
require '../function.php';



if(isset($_POST)){
    EditCheck($_POST);
}
//edit taak function
function EditCheck($input){
	$input['ID'] = intval($input['ID']);
	$conn = openDatabaseConnection();
	$query = $conn->prepare('UPDATE `checklist` SET ID = :id,Name = :Name,Description = :Description,Status = :Status,Time = :Time WHERE `checklist`.ID=:id');
	$query->bindParam(':id',                  $input['ID']);
	$query->bindParam(':Name',                $input['Name']);
	$query->bindParam(':Description',         $input['Description']);
	$query->bindParam(':Status',         	  $input['Status']);
	$query->bindParam(':Time',         	      $input['Time']);

	$query->execute();
	$conn = NULL;
	header('location:../index.php');
}
?>