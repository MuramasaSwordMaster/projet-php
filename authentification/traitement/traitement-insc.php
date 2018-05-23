<?php
if(!empty($_POST['email']))
{

    // D'abord, je me connecte à la base de données.
    mysql_connect(données.
    mysql_connect("localhost", "root", "");
    mysql_select_db("nom_db");

    // Je mets aussi certaines sécurités ici…
    $passe = mysql_real_escape_string(htmlspecialchars($_POST['passe']));
    $passe2 = mysql_real_escape_string(htmlspecialchars($_POST['passe2']));

    if($passe == $passe2)
    {
        // Je vais crypter le mot de passe.
        $passe = sha1($passe);
    }
    
    else
    {
    echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
    }



}
?>
