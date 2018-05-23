
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/** using the open method to initialize the DB.*/
class MyDB extends SQLite3
{
    function __construct($dossierDB)
    {  
        $this->open($dossierDB."DBprojet.db");
      
    }
}




function getDB($dossierDB){

    return new MyDB($dossierDB);

}

function importCSV($dossierDB,$csvFile,$withHeader = true){

	// File structure : "Id_Pers";"Nom";"Prenom";"PWD";"Mail";"Date_Naissance";"Adresse";"Pic_scr";"Apropos"

	// INIT
	$cpt = 1;
	$db = getDB($dossierDB);

	// CHECK path
	if(file_exists($csvFile)){

		// OPEN
		if (($handle = fopen($csvFile, "r")) !== FALSE) {

			// GET Max index
			$query = "select MAX(CAST(Id_Pers AS INT)) as last_id FROM Personne";
			$result = $db->query($query);
			$row = $result->fetchArray(SQLITE3_ASSOC);
			$lastId = intval($row["last_id"]);
			
			// READ lines
			while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {

				if(!$withHeader){

					// CONTROL Structure
					$num = count($data);
					if($num == 9){

						// BUILD Request
						$req = "INSERT INTO Personne (Id_Pers,Nom,Prenom,PWD,Mail,Date_Naissance,Adresse,Pic_src,Apropos)";
						$req .= " VALUES (";
						$req .= ($lastId + $cpt) . ",";
						$req .= '"' . $data[1] . '",';
						$req .= '"' . $data[2] . '",';
						$req .= '"' . $data[3] . '",';
						$req .= '"' . $data[4] . '",';
						$req .= '"' . $data[5] . '",';
						$req .= '"' . $data[6] . '",';
						$req .= '"' . $data[7] . '",';
						$req .= '"' . $data[8] . '")';

						// EXECUTE request
						$result = $db->query($req);

						// INCREMENT
						$cpt++;

					}

				}else{
					$withHeader = false;
				}

				
				
			}

			// CLOSE
			fclose($handle);

		}

	}else{

		return false;
	}


}


function exportCSV($dossierDB,$csvFile){

	// File structure : "Id_Pers";"Nom";"Prenom";"PWD";"Mail";"Date_Naissance";"Adresse";"Pic_scr";"Apropos"

	// INIT
	$db = getDB($dossierDB);

		// OPEN csv
		if (($handle = fopen($csvFile, "w")) !== FALSE) {

			// PUT Headers
			fputcsv($handle, array("Id_Pers","Nom","Prenom","PWD","Mail","Date_Naissance","Adresse","Pic_src","Apropos"));

			// GET Personnes
			$query = "select * FROM Personne";
			$result = $db->query($query);
			while ($row = $result->fetchArray(SQLITE3_ASSOC)) {

				// PUT in CSV
				fputcsv($handle, array(
					$row["Id_Pers"],
					$row["Nom"],
					$row["Prenom"],
					$row["PWD"],
					$row["Mail"],
					$row["Date_Naissance"],
					$row["Adresse"],
					$row["Pic_src"],
					$row["Apropos"]
				));

			}


			// CLOSE
			fclose($handle);

		}



}

?>