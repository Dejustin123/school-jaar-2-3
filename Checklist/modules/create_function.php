<?php
require '../function.php';

// create function
if(isset($_POST)){
	CreateCheck();
}

function CreateCheck(){
	$conn = openDatabaseConnection();
	$query = $conn->prepare('INSERT INTO `checklist` (`ID`, `Name`, `Description`, `Status`,`Time`)
							VALUES
								 (NULL,
								 "'.$_POST['Name'].'",
								 "'.$_POST['Description'].'",
								 "'.$_POST['Status'].'",
								 "'.$_POST['Time'].'"
								 )'
							);
	$query->execute();
	$conn = NULL;
	header('location:../index.php');
}
?>