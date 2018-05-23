<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../../inclusions/db.inc.php') ; 

// INIT
$ts = time();
$file = "export_$ts.csv";

// GET Ids
$tmp = json_decode($_GET["ids"]);
$tmp = "'" . implode("','", $tmp) . "'";


// BUILD Request
$request = "SELECT * from Personne WHERE Id_Pers IN(".$tmp.")";

// EXPORT
exportCSV("../../db/",$file,$request);
//echo '<script type="text/javascript">window.location.replace("'.$rootPath.'/inout/'.$file.'");</script>';

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
flush(); // Flush system output buffer
readfile($file);
exit;



 ?>