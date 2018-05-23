<?php

include('../../inclusions/db.inc.php') ; 

$db = getDB('../../db/');

$query = "select * FROM Etudie";
echo "here";

$result = $db->query($query);

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