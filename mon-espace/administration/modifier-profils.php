<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier les profils</title>
    <?php 
     include('../../inclusions/config.inc.php');
 include('../../inclusions/head-content.inc.php');
 

 ?>
 
 <script type="text/javascript">
   var liste  = <?php echo  $_GET['ids']; ?>
   liste = JSON.stringify(liste)
 </script>

<style media="screen">
  select{
    
    width : 100%;
  }
</style>
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
        <div class="offset-md-2 col-md-8">
                <div class="card" style="width: 100%;">
                        <div class="card-header">
                          Modififications des profils
                        </div>
                        
                        
                        
                        <div class="">
                          
                          <form class="" action="index.html" method="post">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Filière</th>
                                  <th scope="col">Niveau</th>
                                  <th scope="col">Statut</th>
                                </tr>
                              </thead>
                              <tbody>
                                
                                <tr>
                                  <td>
                                    <select id='filiere' class="" name="Niliere">
                                    <option value="Etudiant">Etudiant</option>
                                      <option value="AncienMiagiste">Ancien Miagiste</option>
                                    
                                  </select>
                                
                                </td>
                                  <td>
                                    <select id='niveau' class="" name="Niveau">
                                        <option value="vide">-</option>
                                       <option value="L3">Licence 3</option>
                                       <option value="M1">MASTER 1</option>
                                       <option value="M2">MASTER 2</option>
                                  </select>
                                
                                    
                                    
                                    
                                  </td>
                                  <td>
                                    
                                    <select id='statut' class="" name="Statut">
                                        <option value="vide">-</option>
                                       <option value="Apprentissage">Apprentissage</option>
                                       <option value="Classique">Classique</option>
                                  </select>
                                
                                    
                                  </td>
                                
                                </tr>
                                   
                              </tbody>
                            </table>
                            
                            <button id="annuler" type="button" class="btn btn-primary">
                              Annuler
                            </button>  
    
                            
                            <button id="valider" type="button" class="btn btn-primary">
                              Valider
                            </button>  
                        
    
    
                      
                     
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
    
</div>
</div>
</div>


 <?php 
 
 include('../../inclusions/js.inc.php');
 ?>
 
 <script type="text/javascript">
   $('#valider').click(function(e){
     window.open('traitement/traitement-profil.php?ids='+liste +'&amp;filiere='
     +$('#filiere').val()+'&amp;niveau='
    +$('#niveau').val()
    +'&amp;statut='
    +$('#statut').val());
   })
   
   $('#annuler').click(function(e){
     
     
     window.open('./');
     
   })
   
 </script>
</body>
</html>