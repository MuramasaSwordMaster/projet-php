<?php
session_start(); 
include('../../inclusions/db.inc.php'); 
//include('../../inclusions/session.inc.php') ; 

$db = getDB('../../db/');


//$bd = sqlite_open("mabase.bd", 0666, $error);

/*$email = sqlite_escape_string(htmlspecialchars($_POST['email']));
$passe = sqlite_escape_string(htmlspecialchars($_POST['passe']));*/
$email = $_POST['email'];
$passe = $_POST['password'];
//Je crypte $passe avec la fonction "sha1"
//$passe = sha1($passe);
$nbre = $db->query("SELECT COUNT(*) AS exist FROM Personne WHERE Mail='$email'");

if($nbre != "0") //si le pseudo existe
{
    // C'est ici que l'on met le reste du script servant à se connecter.
    //
    $quete = $db->query("SELECT * FROM Personne WHERE Mail='$email' and PWD='$passe'");
    if($passe == $quete->fetchArray(SQLITE3_ASSOC)['PWD'])    
    {
    // C'est ici que je mets le code servant à effectuer la connexion, car le mot de passe est bon.
    //echo 'ok';
    $_SESSION["nom"] = $quete->fetchArray(SQLITE3_ASSOC)['Nom'];
    header('Location: ../../index.php');
    }
    else // Si le couple pseudo/ mot de passe n'est pas bon.
    {
    echo 'Vous   n\'avez pas rentré les bons identifiants';
    }
}

?>