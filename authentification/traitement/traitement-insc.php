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
$statut = $_POST['statut'];
$niveau = $_POST['niveau'];
$mode = $_POST['mode'];


    $db->exec("INSERT INTO 
    Personne (Id_Pers,Nom,Prenom,PWD,Mail,Date_Naissance,Adresse,Pic_src,Apropos, Statut) 
    VALUES ('$num','$nom', '$prenom', '$passe', '$email', '$dateNaiss', '$adresse', '0', '0', '$statut')");
  /*  $db->exec("CREATE OR REPLACE TRIGGER Remplir_etudie AFTER INSERT ON Personne 
    WHEN '$statut' = '2'
    BEGIN    
        INSERT INTO Etudie(Id_Pers, Annee, Note, Niveau, Mode, Num_interne) 
        VALUES ('$num', '2018', null, '$niveau', '$mode', '$num');
    END;");*/
    $db->exec("INSERT INTO Etudie(Id_Pers, Annee, Note, Niveau, Mode, Num_interne) 
        VALUES ('$num', '2018', null,   '$niveau', '$mode', '$num');");

      /*  if ($niveau == 'Ancien de la Miage')
          $db->exec("INSERT INTO AncienMiagiste(Id_Pers, Id_Ent, Date_Entree, Post, duree) 
          VALUES ('$num', 0, null,   '$niveau', '$mode', '$num');");*/

        /* a mettre dans profil
        CREATE TRIGGER rempli_ancien after update on etudie
        when '$niveau'='diplomé'
        begin
          insert into AncienMiagiste(Id_Pers, Id_Ent, Date_Entree, Post, duree) 
          VALUES ('$num', 0, null,   null, null, null);
        end;

        */



  
}
?>
