<?php

include('../../inclusions/db.inc.php') ; 

$db = getDB('../../db/');
$db->exec("INSERT INTO 
    Personne (Id_Pers,Nom,Prenom,PWD,Mail,Date_Naissance,Adresse,Pic_src,Apropos) 
    VALUES (1,'TOTO','TITI',1234,'toto@gmail.com',03091995,'Paris','c://','je suis toto')"
    );

$result = $db->query('SELECT * FROM Personne');
var_dump($result->fetchArray());

?>