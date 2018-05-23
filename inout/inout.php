<?php


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
if(isset($_POST["submit"])){

	if($_POST["submit"] == "import"){

		$file = $_FILES["fileToUpload"]["tmp_name"];
		importCSV("../db/",$file);

	}elseif($_POST["submit"] == "export"){


		$ts = time();
		$file = "export_$ts.csv";
		exportCSV("../db/",$file);
		echo '<script type="text/javascript">window.location.replace("'.$rootPath.'/inout/'.$file.'");</script>';

	}

}

?>
	




                        	Import : <br />
                        	<form action="" method="post" enctype="multipart/form-data">
							    Select file to upload:
							    <input type="file" name="fileToUpload" id="fileToUpload"><br />
							    <input type="submit" value="import" name="submit">
							</form>

							<br />
							<br />

							Export : <br />
                        	<form action="" method="post" enctype="multipart/form-data">
							    Select file to upload:
							   
							    <input type="submit" value="export" name="submit">
							</form>





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

