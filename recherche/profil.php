<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include('../inclusions/db.inc.php') ; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil reseau</title>
    <?php 
        include('../inclusions/config.inc.php');
        include('../inclusions/head-content.inc.php');
    ?>
</head>

<body>
    <div id="wrapper">
        <div class="container-fluid">

            <?php 
 
                 include('../inclusions/nav.inc.php');
 
            ?>
            <div id="corps-conteneur">


                    <div class="container-fluid">
                        <div class="espaceur">



                            <?php


                            // CHECK query parmeter
                            if(isset($_GET["id"]) && !empty($_GET["id"])){

                                // INIT
                                $db = getDB('../db/');
                                $id = $_GET["id"];
                                $output = array();

                                // BUILD QUery
                                $query = "select * FROM Personne WHERE Id_Pers == '$id'";
                                

                                // EXEC query and browse results
                                $result = $db->query($query);
                                $row = $result->fetchArray(SQLITE3_ASSOC);

                                    foreach($row as $key=>$value){
                                         echo "<span style='font-weight:bold'>$key</span> : $value <br />" ;
                                    }
                                    
                                
                                

                            }


                            ?>


              
                        </div>
                        
                    </div>
    
            </div>
            
        </div>
    </div>
    

    <?php 
        include('../inclusions/js.inc.php');
    ?>

</body>
</html>