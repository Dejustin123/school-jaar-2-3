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
// Validator functie voor posts

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// 	$name = test_input($_POST["Name"]);
// 	$desc = test_input($_POST["Description"]);
// 	$status = test_input($_POST["Status"]);
// }
// function test_input($data) {
// 	$data = trim($data);
// 	$data = stripslashes($data);
// 	$data = htmlspecialchars($data);
// 	return $data;
// }

// functie's om query uit te voeren
function GetAllCheck(){
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM checklist");
	$query -> execute();
	$result = $query->fetchAll();
	return $result;
	$conn = NULL;
}


function Getcheck($id){
	$conn = openDatabaseConnection();
	$query = $conn->prepare('SELECT * FROM `checklist` WHERE ID=:id');
	$query->execute([':id'=>$id]);
	$result = $query->fetchAll();
	return $result[0];
	$conn = NULL;
}

?>