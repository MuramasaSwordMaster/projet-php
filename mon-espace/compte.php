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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
                <div class="card" style="width: 100%;">
                        <div class="card-header">
                          Paramètres de compte
                        </div>
                        <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="generaux">Généraux</a></li>
                                <li class="list-group-item"><a href="a-propos">A propos</a></li>
                                <li class="list-group-item"><a href="confidentialite">Confidentialité</a></li>
                                <li class="list-group-item"><a href="mot-de-passe">Mot de passe</a></li>
                                <li class="list-group-item"><a href="avatar">Avatar</a></li>
                        
                                </ul>
            </div>
        </div>
        <div class="col-md-9">
                <div class="card" style="width: 100%;">
                        <div class="card-header">
                         Mot de passe
                        </div>
                       <div class="card-body">
                <form action="#">
                <div class="form-group">
                <div class="row">
                <div class="col-6">
                    <label for="">Mot de passe courrant</label>
                <input type="text" class="form-control" placeholder="Mot de passe">
                </div>
                <div class="col-6">
                    <label for="">Nouveau mot de passe :</label>
                  <input type="text" class="form-control" placeholder="Nouveau mot de passe">
                </div>
            </div>
        </div>
       
        
            <div class="form-group">
                    <div class="row">
                       
                <div class="offset-6  col-6">
                        <label for="">Répétez votre mot de passe :</label>
                      <input type="text" class="form-control" placeholder="Répeter mot de passe">
                    </div>

                    
                
                </div>
                </div>
     
                          
                </form>
                       </div>
                    
                </div>
                
   
        </div>
    </div>
</div>

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