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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = test_input($_POST["ID"]);
	$name = test_input($_POST["naam"]);
	$desc = test_input($_POST["Descriptie"]);
	$status = test_input($_POST["Status"]);
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }
// functie's om query uit te voeren
function GetAllCheck(){
	$conn = openDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM checklist");
	$query -> execute();
	$result = $query->fetchAll();
	return $result;
	$conn = NULL;
}
function DeleteCheck($id){
	$query = $conn->prepare("DELETE * FROM `checklist` WHERE id->:id");
	$query->execute();
	$result = $query->fetchAll();
	return $result;
	$conn = NULL;
}
function Getcheck(){
	$query = $conn->prepare('SELECT * FROM `checklist` ');
	$query->execute();
	$result = $query->fetchAll();
	return $result;
	$conn = NULL;
}
function EditCheck(){
	$query = $conn->prepare('SELECT * FROM `checklist` ');
	$query->execute();
	$result = $query->fetchAll();
	return $result;
	$conn = NULL;
}

?>