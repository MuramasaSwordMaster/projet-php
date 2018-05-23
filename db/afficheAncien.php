<?php

include('../../inclusions/db.inc.php') ; 

$db = getDB('../../db/');



$query = "select * FROM Personne";
echo "here";

$result = $db->query($query);

while ($row = $result->fetchArray()) {
    print $row["Nom"] . "\n";
}
?>