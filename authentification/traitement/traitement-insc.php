<?php

include('../../inclusions/db.inc.php') ; 

$db = getDB('../../db/');

if(!empty($_POST['nom']))
{

$num = $_POST['num'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$passe = $_POST['passe'];
$email = $_POST['email'];
$dateNaiss = $_POST['dateNaiss'];
$adresse = $_POST['adresse'];
<<<<<<< HEAD
<<<<<<< HEAD
$mode = $_POST['mode'];
/*$niveau = $_POST['niveau'];

$statut = $_POST['statut'];*/
=======
$statut = $_POST['statut'];
$niveau = $_POST['niveau'];
$mode = $_POST['mode'];
>>>>>>> 63901ce077dfa4330d395f40d44abf6fdce7298f
=======
$statut = $_POST['statut'];
$niveau = $_POST['niveau'];
$mode = $_POST['mode'];
>>>>>>> c8dce0f0b800618fb0257b00cc5b99dfa65d99c4


    $db->exec("INSERT INTO 
    Personne (Id_Pers,Nom,Prenom,PWD,Mail,Date_Naissance,Adresse,Pic_src,Apropos, Statut) 
    VALUES ('$num','$nom', '$prenom', '$passe', '$email', '$dateNaiss', '$adresse', '0', '0', '$statut')");
  /*  $db->exec("CREATE OR REPLACE TRIGGER Remplir_etudie AFTER INSERT ON Personne 
    WHEN '$statut' = '2'
    BEGIN    
        INSERT INTO Etudie(Id_Pers, Annee, Note, Niveau, Mode, Num_interne) 
        VALUES ('$num', '2018', null, '$niveau', '$mode', '$num');
    END;");*/
<<<<<<< HEAD
<<<<<<< HEAD
  /*  $db->exec("INSERT INTO Etudie(Id_Pers, Annee, Note, Niveau, Mode, Num_interne) 
        VALUES (99, '2018', null, '$niveau', '$mode', '$num');");*/
   echo($mode) ; 
=======
    $db->exec("INSERT INTO Etudie(Id_Pers, Annee, Note, Niveau, Mode, Num_interne) 
        VALUES ('$num', '2018', null,   '$niveau', '$mode', '$num');");

>>>>>>> 63901ce077dfa4330d395f40d44abf6fdce7298f
=======
    $db->exec("INSERT INTO Etudie(Id_Pers, Annee, Note, Niveau, Mode, Num_interne) 
        VALUES ('$num', '2018', null,   '$niveau', '$mode', '$num');");

>>>>>>> c8dce0f0b800618fb0257b00cc5b99dfa65d99c4
  
}
?>
