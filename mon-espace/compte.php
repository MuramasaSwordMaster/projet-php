<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compte</title>
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
                                <li class="list-group-item"><a href="./compte.php?rubrique=generaux">Généraux</a></li>
                                <li class="list-group-item"><a href="./compte.php?rubrique=a-propos">A propos</a></li>
                                <li class="list-group-item"><a href="./compte.php?rubrique=avatar">Avatar</a></li>
                          </ul>
            </div>
        </div>
        <div class="col-md-9">
          
          
          <?php 
    
          if(isset($_GET['rubrique'])){
            
    
            if($_GET['rubrique']=='generaux'){
              
            
              ?>
              
              <div class="card" style="width: 100%;">
                        <div class="card-header">
                          Paramètre généraux
                        </div>
                       <div class="card-body">
<form action="#">
        <div class="form-group">
        <div class="row">
                <div class="col-6">
                <input type="text" class="form-control" placeholder="salwa">
                </div>
                <div class="col-6">
                  <input type="text" class="form-control" placeholder="ansart">
                </div>
              </div>
        </div>
        <div class="form-group">
              <div class="row">
                    <div class="col-6">
                      <input type="text" class="form-control" placeholder="salwa.ansart@gmail.com">
                    </div>
                    <div class="col-6">
                      <input type="text" class="form-control" placeholder="0678394738">
                    </div>
                   
                  </div>
                </div>
                <div class="form-group">
                        <div class="row">
                              <div class="col-6">
                                <input type="text" class="form-control" placeholder="Adresse physique">
                              </div>
                              <div class="col-6">
                                <input type="date" class="form-control">
                              </div>
                             
                            </div>
                          </div>
                                <input type="submit" class="btn btn-primary" placeholder="ansart">
</form>
                       </div>
                      </div>
              
              
              
              <?php 
        
              
            }

          else if($_GET['rubrique']=='a-propos'){
            
            ?>
            
            <div class="card" style="width: 100%;">
                        <div class="card-header">
                          A propos
                        </div>
                       <div class="card-body">
<form action="#">
        <div class="form-group">
        <div class="row">
                <div class="col-12">
                <textarea name="name" rows="8" cols="80"></textarea>
                </div>
              
              </div>
        </div>
          <input type="submit" class="btn btn-primary" placeholder="ansart">
</form>
                       </div>
                      </div>
            
            
            <?php 
            
          }
          else if($_GET['rubrique'] == 'avatar'){
              ?>
              <div class="card" style="width: 100%;">
                          <div class="card-header">
                            A propos
                          </div>
                         <div class="card-body">
  <form action="#">
          <div class="form-group">
          <div class="row">
                  <div class="col-12">
                    <label for="fichier">
                      
                      Choisir un fichier
                    </label>
                    <input type="file" name="" value="">
                  
                  </div>
            
                </div>
          </div>
                <input type="submit" class="btn btn-primary" >
        
  </form>
                         </div>
                        </div>
              
            
              <?php 
              
            }
          }
        
          
          
          
          
          
  
           ?>
          
          
        
          
   
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