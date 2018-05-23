
<nav class="navbar navbar-expand-lg ">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="#">Paris Nanterre</a>

<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
<li class="nav-item active">
<a class="nav-link" href="#">    
  <div id="nav-nom"> 
  Bonjour William Pasco
    <img id="photo-profil-nav-principale" src="<?php echo $rootPath; ?>ressources/img/william.jpg">
     </div>
</a>
</li>
<li class="nav-item" style='padding-left:20px; padding-top: 15px;'>
  <form  class="form-inline nav-item" method="post" action="<?php echo $rootPath; ?>recherche/resultat-recherche.php">
    <input placeholder="Rechercher un ami" aria-label="Rechercher un ami" id="search-box" name="query">
    <button class="btn btn-light" type="submit">Rechercher</button>
  </form>
</li>
</ul>

<ul class='navbar-nav'>
  <li class="nav-item">

           <a href="<?php echo $rootPath; ?>authentification/connexion.php" class="btn btn-light" >Se connecter</a>
  
  </li>
  <li class="nav-item" style='padding-left:20px;'>

        <a href="<?php echo $rootPath; ?>authentification/inscription.php" class="btn btn-light">Inscription</a>

  </li>
  
  <li class="nav-item" style='padding-left:20px;'>

        <a href="<?php echo $rootPath; ?>authentification/deconnexion.php" class="btn btn-light">Se déconnecter</a>

  </li>
</ul>
</div>
</nav>
          
          
          
          
          
          
          
          
        

      












          <div id='nav-links'>
<ul>
<li>
<a href="<?php echo $rootPath; ?>mon-espace/compte.php?rubrique=generaux" >Mon compte</a>
</li>
<li>
<a href="<?php echo $rootPath; ?>mon-espace/message.php">Mes messages</a>
</li>
<li>
<a href="<?php echo $rootPath; ?>mon-espace/administration/">Administration</a>
</li>
</ul>
</div>
        
            
           

        