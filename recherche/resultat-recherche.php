<?php

include('../inclusions/db.inc.php') ; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil reseau</title>
    <?php 
        include('../inclusions/config.inc.php');
        include('../inclusions/head-content.inc.php');
    ?>
</head>

<body>
    <div id="wrapper">
        <div class="container-fluid">

            <?php 
 
                 include('../inclusions/nav.inc.php');
 
            ?>
            <div id="corps-conteneur">


                    <div class="container-fluid">
                        <div class="espaceur">

<?php


// CHECK query parmeter
if(isset($_POST["query"]) && !empty($_POST["query"])){

	// INIT
	$db = getDB('../db/');
	$query = $_POST["query"];
	$output = array();

	// BUILD QUery
	$query = "select * FROM Personne WHERE (Nom like'%$query%' OR Prenom LIKE '%$query%' )";

	// EXEC query and browse results
	$result = $db->query($query);
	while ($row = $result->fetchArray(SQLITE3_ASSOC)) {

		//LIST results
		echo "<li><a href=\"$rootPath/recherche/profil.php?id=".$row["Id_Pers"]."\">" . $row["Nom"] . ' '  .$row["Prenom"] . "</a></li>";

	}
	
	

}


?>



                        </div>
                    </div>
    
            </div>
        </div>
    </div>


    <?php 
        include('../inclusions/js.inc.php');
    ?>

</body>
</html>

