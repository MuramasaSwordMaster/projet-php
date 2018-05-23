<?php

if(isset($_GET['rubrique'])){

include('../../inclusions/db.inc.php') ; 

$db = getDB('../../db/');

if($_GET['rubrique']=='licence3' || $_GET['rubrique']=='master1' || $_GET['rubrique']=='master2'){

$query = "select * FROM Etudie W";
echo "here";

$result = $db->query($query);



}

}


while ($personne = $result->fetchArray()) {
  
    print  . "\n";
    
    echo "  <tr>
           <td><input type="checkbox" data-id='1' ></td>
         <td>".$personne["Nom"]."</td>
         <td>".$personne["Prenom"]."</td>
         <td>Miage</td>
          <td>L3</td>
          <td>Apprenti</td>
       </tr>";
}

?>