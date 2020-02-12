<?php
require '../function.php';

// create function
if(isset($_POST)){
	CreateCheck();
}

function CreateCheck(){
	$conn = openDatabaseConnection();
	$query = $conn->prepare('INSERT INTO `checklist` (`ID`, `Name`, `Description`, `Status`)
							VALUES
								 (NULL,
								 "'.$_POST['Name'].'",
								 "'.$_POST['Description'].'",
								 "'.$_POST['Status'].'"
								 )'
							);
	$query->execute();
	$conn = NULL;
	echo('task created succesfully ! <br>');
	header('index.php');
}
?>