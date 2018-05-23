
<?php
/** using the open method to initialize the DB.*/
class MyDB extends SQLite3
{
    function __construct($dossierDB)
    {  
        $this->open($dossierDB."DBprojet.db");
      
    }
}




function getDB($dossierDB){

    return new MyDB($dossierDB);

}

?>