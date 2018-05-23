<?php
$base = 'phpfacile_mabase.sqlite';
try {
    $bd = new SQLiteDatabase($base);
} catch (SQLiteException $e) {
    die("La création ou l'ouverture de la base [$base] a échouée ".
         "pour la raison suivante: ".$e->getMessage());
}
// Ajout de données dans la table
$sql = "CREATE TABLE demo (visiteur VARCHAR(64),
 datevisite VARCHAR(19))" ; 

$sql = "INSERT INTO demo (visiteur, datevisite) ".
            "VALUES ('phpfacile', '".date("Y-m-d H:i:s")."')";
$reponse = $bd->queryExec($sql, $err);
if ($reponse === FALSE) {
    echo "La requête a échouée pour la raison suivante: ".$err;
} else {
    echo "Un nouvel enregistrement a été ajouté à la base";
}
// Lecture des donnees dans la table
$sql = "SELECT visiteur, datevisite FROM demo";
$reponse = $bd->query($sql, SQLITE_BOTH, $err);
if ($reponse === FALSE) {
    echo "La requete a echouee pour la raison suivante: ".$err;
} else {
    echo "Voici le contenu de la table demo:\n";
    while ($row = $reponse->fetch()) {
        echo $row['visiteur']." - ".$row['datevisite']."\n";
    }
}

// Deconnexion
$bd = null;
?>