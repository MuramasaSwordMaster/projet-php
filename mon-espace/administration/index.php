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
 <style>



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
        <div class="col-md-3">
                <div class="card" style="width: 100%;">
          <div class="card-header">
                    Groupes 
    </div>
    <div id="accordion">

  <div class="card">
    <div class="card-header">
      
      <a class="card-link" href='../administration/index.php?rubrique=licence3' >
        Licence 3
      </a>
      
      <a style='float:right;' class="toggle-link collapsed" data-toggle="collapse" href="#collapseOne" data-title="Déplier l'offre" style="color:#fff;background-color:#ED595B;" aria-expanded="false" aria-controls="collapseOne">
           <span class="fa fa-chevron-down"></span>
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
        <ul class="list-group ">
                <li class="list-group-item"><a href='../administration/index.php?rubrique=master2&amp;mode=apprentissage'>Apprentissage</a></li>
                <li class="list-group-item"><a  href='../administration/index.php?rubrique=master2&amp;mode=classique'>Classiques</a></li>
                </ul>
        
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link"  href='../administration/index.php?rubrique=master1'>
        Master 1
      </a>
      <a style='float:right;' class="toggle-link collapsed" data-toggle="collapse" href="#collapseTwo" data-title="Déplier l'offre" style="color:#fff;background-color:#ED595B;" aria-expanded="false" aria-controls="collapseOne">
           <span class="fa fa-chevron-down"></span>
           </a>
    </div>    
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <ul class="list-group ">
                <li class="list-group-item"><a  href='../administration/index.php?rubrique=master1&amp;mode=apprentissage'>Apprentissage</a></li>
                <li class="list-group-item"><a  href='../administration/index.php?rubrique=master1&amp;mode=classique'>Classiques</a></li>
            
        
                </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="card-link" href='../administration/index.php?rubrique=master2' >
        Master 2
      </a>
      <a style='float:right;' class="toggle-link collapsed" data-toggle="collapse" href="#collapseThree" data-title="Déplier l'offre" style="color:#fff;background-color:#ED595B;" aria-expanded="false" aria-controls="collapseOne">
           <span class="fa fa-chevron-down"></span>
           </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <ul class="list-group ">
                <li class="list-group-item"><a  href='../administration/index.php?rubrique=master2&amp;mode=apprentissage'>Apprentissage</a></li>
                <li class="list-group-item"><a  href='../administration/index.php?rubrique=master2&amp;mode=classique'>Classiques</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <a class="card-link" href='../administration/index.php?rubrique=anciens' >
        Anciens Miagistes
      </a>
    
    </div>
  
  </div>
  <div class="card">
    <div class="card-header">
      <a class="card-link" href='../administration/index.php?rubrique=tous' >
        Tout le monde
      </a>
    
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
                         
                         <form class="" action="index.html" method="post">
                        
                               
                               
                               <?php 
                               if(isset($_GET['rubrique'])){
                                 
                                 ?>
                                 
                                 <table class="table">
                                   <thead>
                                     <tr>
                                       <th scope="col"><input type="checkbox"  id='tout-cocher' title='Tout Cocher'></th>
                                       <th scope="col">Nom</th>
                                       <th scope="col">Prénom</th>
                                       <th scope="col">Filière</th>
                                       <th scope="col">Niveau</th>
                                       <th scope="col">Statut</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                 
                                 <?php
                                 include('generer-tab.php');
                                 
                              ?>
                              
                              
                              
                               </tbody>
                             </table>
                             
                             <button id="exporter-profils" type="button" class="btn btn-primary">
                               Exporter (CSV)
                               
                             </button>  
  
  
                          <button  data-toggle='modal' data-target='#modal-message' type="button" class="btn btn-primary">
                            Envoyer un message
                            
                          </button>
  
                          <button id="modifier-profils" type="button" class="btn btn-primary">
                            Modifier les profils
                          </button>  

                              <?php 
                               }
                               else{
                                ?>
                                <h3 style='text-align:center;font-size:1.7em;color:#999;'>Selectionnez une filière à droite</h3>
                                <?php 
                              }
                                 ?>
                               
                            
                               
                              
                            
                        
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


<div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Envoyer un message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <textarea id='message' rows="8" style='width:100%;'></textarea>
      
      </div>
      <div class="modal-footer">
        <button id="envoyer-message" type="button" class="btn btn-primary">Envoyer le message</button>
      </div>
    </div>
  </div>
</div>


 <?php 
 
 include('../../inclusions/js.inc.php');
 ?>
 
 
 <script type="text/javascript">
   $('#tout-cocher').click(function(e){
     if($(this).prop('checked'))
     $('tbody input').prop('checked', true)
     else {
          $('tbody input').prop('checked', false)
     }
  
    
   })
 </script>
 
 
<script type="text/javascript">

$('#envoyer-message').click(function(e){
window.open('traitement-message.php?ids='+JSON.stringify(obtenirIdsSelectionnes())+'&amp;message='+$('#message').html())
})

$('#exporter-profils').click(function(e){
window.open('exporter-profils.php?ids='+JSON.stringify(obtenirIdsSelectionnes()))
})



$('#modifier-profils').click(function(e){
window.open('modifier-profils.php?ids='+JSON.stringify(obtenirIdsSelectionnes()));
})
function obtenirIdsSelectionnes(){
  var liste = []
  $('tbody input').each(function(index){
    if($(this).prop('checked'))
    liste.push($(this).attr('data-id'))
  })
  return liste
  
}
</script>
</body>
</html>