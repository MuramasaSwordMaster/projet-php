<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil reseau</title>
    <?php 
     include('../../inclusions/config.inc.php');
 include('../../inclusions/head-content.inc.php');
 ?>

</head>
<body>
<div id="wrapper">
 <div class="container-fluid">

 <?php 
 
 include('../../inclusions/nav.inc.php');
 
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
    <div id="accordion">

  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
        Collapsible Group Item #1
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum..
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Collapsible Group Item #2
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum..
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        Collapsible Group Item #3
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum..
      </div>
    </div>
  </div>

</div>
    
    

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
 
 include('../../inclusions/js.inc.php');
 ?>
</body>
</html>