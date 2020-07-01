<?php
function openDatabaseConnection(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "challenge";
	
	try {
		$conn = new PDO("mysql:host=$servername;dbname=".$database, $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
		}
	catch(PDOException $e)
		{
		echo "Connection failed: " . $e->getMessage();
		}
}

// Get functie's om querys uit te voeren
function GetAllCheck()
{

	$sql = "
		SELECT 
			checklist.* 
		FROM 
			checklist,
			list
		WHERE 1 = 1
			AND checklist.list_id = list.id
	";

	$conn = openDatabaseConnection();
	$query = $conn->prepare($sql);
	$query -> execute();
	$result = $query->fetchAll();
	return $result;
	$conn = NULL;
}
//krijgt alle lists
function getList()
{
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM `list`");
	$query -> execute();
	$result = $query->fetchAll();
	return $result;
	$conn = NULL;
}
//krijgt specifieke list
function getlistspec($id)
{
	$conn = openDatabaseConnection();
	$query = $conn->prepare('SELECT * FROM `list` WHERE id=:id');
	$query->execute([':id'=>$id]);
	$result = $query->fetchAll();
	return $result[0];
	$conn = NULL;
}
//krijgt specifieke check
function Getcheck($id)
{
	$conn = openDatabaseConnection();
	$query = $conn->prepare('SELECT * FROM `checklist` WHERE ID=:id');
	$query->execute([':id'=>$id]);
	$result = $query->fetchAll();
	return $result[0];
	$conn = NULL;
}

?>