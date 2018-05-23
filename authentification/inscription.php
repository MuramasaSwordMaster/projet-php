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

<script type="text/javascript">

    window.onload = function() {
        var divNiveaux = document.getElementById("divNiveaux");
        divNiveaux.style.display  = 'none';  
    };

   function cbStatutChange() {
    var cbStatut = document.getElementById("cbStatut");
    var divNiveaux = document.getElementById("divNiveaux");
    divNiveaux.style.display  = 'none';   
    if (cbStatut.options[cbStatut.selectedIndex].value == 2)
        divNiveaux.style.display  = 'block';
    else
        divNiveaux.style.display  = 'none';        
   }
</script>

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
<div class="container-fluid bg-light py-3">
    <div class="row">
        <div class="col-md-6 mx-auto">
        <form action="./traitement/traitement-insc.php" method="post">
                <div class="card card-body">
                    <h3 class="text-center mb-4">Inscription</h3>
                    <div class="alert alert-danger">
                        <a class="close font-weight-light" data-dismiss="alert" href="#">�</a>Le mot de passe est trop court.
                    </div>
                    <fieldset>
                        <div class="form-group">                        
                            <select id="cbStatut" name="statut" onchange="cbStatutChange()" class="form-control input-lg">
                                <option selected="selected" value="0">Vous êtes ?</option>
								<option value="1">Enseignant</option>
                                <option value="2">Etudiant</option>
                            </select>
                        </div>
                        <div class="form-group" id="divNiveaux">
                            <input type="radio" name="mode" value="Classique"> Classique<br>
                            <input type="radio" name="mode" value="Apprentissage"> Apprentissage<br>
                                <select class="form-control input-lg" name="niveau">
                                    <option>Niveau</option>
                                    <option>L3</option>
                                    <option>M1</option>
                                    <option>M2</option>
                                </select>
                        </div>
                        <div class="form-group has-error">
                            <input required class="form-control input-lg" placeholder="Nom" name="nom" type="text">
                        </div>
                        <div class="form-group has-error">
                            <input class="form-control input-lg" placeholder="Prénom" name="prenom" type="text">
                        </div>
                        <div class="form-group has-error">
                            <input class="form-control input-lg" placeholder="Numéro" name="num" type="text">
                        </div>
                        <div class="form-group has-error">
                            <input class="form-control input-lg" placeholder="Adresse" name="adresse" type="text">
                        </div>
                        <div class="form-group has-error">
                            <input class="form-control input-lg" placeholder="Date de naissance" name="dateNaiss" type="text">
                        </div>
                        <div class="form-group has-error">
                            <input class="form-control input-lg" placeholder="Adresse E-mail" name="email" type="text">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Mot de passe" name="passe" value="" type="password">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Confirmer mot de passe" name="passe2" value="" type="password">
                        </div> 
                        <input class="btn btn-lg btn-primary btn-block" value="S'inscrire" type="submit">
                    </fieldset>
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


 <?php 
 
 include('../inclusions/js.inc.php');
 ?>
</body>
</html>