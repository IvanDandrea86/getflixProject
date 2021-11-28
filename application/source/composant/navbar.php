

<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <div class="preacceuil"><a href="?preacc" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img class="image-fluid" src="./media/pop.png" alt="">
        </a>
        </div>

        <h2 id="titre">Getflix</h2>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="
          <?php 
          echo (isset($_SESSION["auth"]) ? "?user_gallery":"?intro" );
          ?>
          " class="nav-link px-2 text-white">Accueil</a></li>
          <?php   if(isset($_SESSION["auth"])){ ?>
          <li><div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   Catégories
  </button>
  
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <li><a class="dropdown-item" href="?gallery">Suggested</a></li>
      
  <li><a class="dropdown-item" href="#">Horror</a></li>
    <li><a class="dropdown-item" href="#">Thriller</a></li>
    <li><a class="dropdown-item" href="#">Humour</a></li>
    <li><a class="dropdown-item" href="#">Comédie</a></li>
    <li><a class="dropdown-item" href="#">Fantasy</a></li>
    <li><a class="dropdown-item" href="#">Sci-Fi</a></li>
  </ul>
          </div>
<?php
  }?>

<li>
<?php if(!isset($_SESSION["auth"])){ ?>
          <li><a href="?tarifs" class="nav-link px-2 text-white">Tarifs</a></li>
          <?php } ?>
          <li><a href="#" class="nav-link px-2 text-white">FAQ</a></li>
          <li><a href="#" class="nav-link px-2 text-white">À propos</a></li>
        </ul>

        
        <?php if(isset($_SESSION["auth"])){
            ?>
        <form action="" method="get" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <label for="site-search"></label>
            <input type="search" id="site-search" name="search"
                   aria-label="Search through site content">
        </form>
        <?php } ?>
       
<div class="text-end">
  <?php if(isset($_SESSION["auth"])):
            ?>
            <form action="" method="post">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <p class="nav-link  mb-0 text-white"><i class="bi bi-house-door"></i> Welcome <?php echo $_SESSION["auth"];?></p>                    
                    <li>
                        <a class="nav-link  text-white" aria-current="page" href="?setting"><i class="bi bi-gear"></i> Settings </a>
                    </li>  
                    <li> 
                        <button type="submit" class="btn btn-secondary  text-white" value="logout" name="logout"><i class="bi bi-arrow-right-square"></i> Log out </button>  
                    </li>
                </ul> 
                </form>
                
                <?php  else :
            ?>

<form action="" method="get">
<button type="submit" name="login" class="btn btn-outline-light btn-outline-danger me-2">Se connecter</button>
<button type="submit" name="signup" class="btn btn-danger">S'inscrire</button>
</form>
         <?php endif; ?>
        </div>
      </div>
    </div>
</header>
