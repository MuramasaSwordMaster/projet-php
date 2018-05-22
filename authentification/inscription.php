<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil reseau</title>
    <?php 
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
<div class="container-fluid bg-light py-3">
    <div class="row">
        <div class="col-md-6 mx-auto">
                <div class="card card-body">
                    <h3 class="text-center mb-4">Inscription</h3>
                    <div class="alert alert-danger">
                        <a class="close font-weight-light" data-dismiss="alert" href="#">×</a>Password is too short.
                    </div>
                    <fieldset>
                        <div class="form-group has-error">
                            <input class="form-control input-lg" placeholder="Adresse E-mail" name="email" type="text">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Mot de passe" name="password" value="" type="password">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Confirmer mot de passe" name="password" value="" type="password">
                        </div>
                        <div class="form-group">
                            <select class="form-control input-lg">
                                <option selecterd="">Question de sécurité</option>
								<option selecterd="">date naissance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control input-lg" placeholder="Réponse question" name="answer" value="" type="text">
                        </div>
                        <input class="btn btn-lg btn-primary btn-block" value="S'inscrire" type="submit">
                    </fieldset>
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