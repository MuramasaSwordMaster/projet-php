<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include('../inclusions/db.inc.php') ; 

// CHECK query parmeter
if(isset($_GET["query"]) && !empty($_GET["query"])){

	// INIT
	$db = getDB('');
	$query = $_GET["query"];
	$output = array();

	// BUILD QUery
	$query = "select * FROM Personne WHERE (Nom like'%$query%' OR Prenom LIKE '%$query%' )";

	// EXEC query and browse results
	$result = $db->query($query);
	while ($row = $result->fetchArray(SQLITE3_ASSOC)) {


	   $output[] = array(
	   		"id" => $row['Id_Pers'],
	   		"value" => $row['Id_Pers'],
	   		"label" => $row['Nom'],
	   		
	   		//"lastname" => $row['Nom'],
	   		//"firstname" => $row['Prenom']
	   );

	}
	
	// RETURN
	echo json_encode($output);

}


?>