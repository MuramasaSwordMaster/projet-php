<?php

if(isset($_GET['rubrique'])){

include('../../inclusions/db.inc.php') ; 

$db = getDB('../../db/');

if($_GET['rubrique']=='licence3' || $_GET['rubrique']=='master1' || $_GET['rubrique']=='master2'){


if($_GET['rubrique']=='licence3'){
  
  if(isset($_GET['mode'])){
    
    if($_GET['mode']=='apprentissage'){
      
      $query = "SELECT P.Nom nom, P.Prenom prenom, E.Mode statut,E.Niveau niveau FROM Etudie E, Personne P where P.Id_Pers = E.Id_Pers
      and E.Niveau= 'L3' and E.mode = 'Apprentissage'";
    }
    else{
      
      $query = "SELECT P.Nom nom, P.Prenom prenom, E.Mode statut,E.Niveau niveau FROM Etudie E, Personne P where P.Id_Pers = E.Id_Pers
      and E.Niveau= 'L3' and E.mode = 'Classique'";
      
    }
    
    
    
    
  }
  else{
    
    
    $query = "SELECT P.Nom nom, P.Prenom prenom, E.Mode statut,E.Niveau niveau FROM Etudie E, Personne P where P.Id_Pers = E.Id_Pers
    and E.Niveau= 'L3'";

  }


  
}

else if($_GET['rubrique']=='master1'){
  
  if(isset($_GET['mode'])){
    
    if($_GET['mode']=='apprentissage'){
      
      $query = "SELECT P.Nom nom, P.Prenom prenom, E.Mode statut,E.Niveau niveau FROM Etudie E, Personne P where P.Id_Pers = E.Id_Pers
      and E.Niveau= 'M1' and E.mode = 'Apprentissage'";
    }
    else{
      
      $query = "SELECT P.Nom nom, P.Prenom prenom, E.Mode statut,E.Niveau niveau FROM Etudie E, Personne P where P.Id_Pers = E.Id_Pers
      and E.Niveau= 'M1' and E.mode = 'Classique'";
      
    }
    
  }
  else{
    
    
    $query = "SELECT P.Nom nom, P.Prenom prenom, E.Mode statut,E.Niveau niveau FROM Etudie E, Personne P where P.Id_Pers = E.Id_Pers
    and E.Niveau= 'M1'";

  }
  
  }
else if($_GET['rubrique']=='master2'){
  
  if(isset($_GET['mode'])){
    
    if($_GET['mode']=='apprentissage'){
      
      $query = "SELECT P.Nom nom, P.Prenom prenom, E.Mode statut,E.Niveau niveau FROM Etudie E, Personne P where P.Id_Pers = E.Id_Pers
      and E.Niveau= 'M2' and E.mode = 'Apprentissage'";
    }
    else{
      
      $query = "SELECT P.Nom nom, P.Prenom prenom, E.Mode statut,E.Niveau niveau FROM Etudie E, Personne P where P.Id_Pers = E.Id_Pers
      and E.Niveau= 'M2' and E.mode = 'Classique'";
      
    }
  }
  else{
    
    $query = "SELECT P.Nom nom, P.Prenom prenom, E.Mode statut,E.Niveau niveau FROM Etudie E, Personne P where P.Id_Pers = E.Id_Pers
    and E.Niveau= 'M2'";

  }
}

}

else if($_GET['rubrique']=='anciens'){
  
}

else if($_GET['rubrique']=='tous'){
  $query = "SELECT P.Nom nom, P.Prenom prenom, E.Mode statut,E.Niveau niveau FROM Etudie E, Personne P where P.Id_Pers = E.Id_Pers";
}


$result = $db->query($query);

while ($personne = $result->fetchArray()) {
    
    echo "<tr>
           <td><input type='checkbox' data-id='1' ></td>
           <td>".$personne['nom']."</td>
           <td>".$personne['prenom']."</td>
           <td>Miage</td>
          <td>".$personne['niveau']."</td>
          <td>".$personne['statut']."</td>
       </tr>";
}


}


?>