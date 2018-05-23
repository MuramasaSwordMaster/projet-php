<?php

include('../../../inclusions/db.inc.php'); 

$db = getDB('../../../db/');

var_dump($_GET['ids']);

$liste  = json_decode($_GET['ids']);

for($i=0;$i < count($liste);$i++){
  $db->query("UPDATE Personne SET WHERE id_etudiant ="intval($liste[$i]).";"")
}

      $query = "SELECT P.Nom nom, P.Prenom prenom, E.Mode statut,E.Niveau niveau FROM Etudie E, Personne P where P.Id_Pers = E.Id_Pers
      and E.Niveau= 'L3' and E.mode = 'Apprentissage'";
  
$result = $db->query($query);

while ($personne = $result->fetchArray()) {
    

}


?>