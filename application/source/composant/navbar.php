<!-- 
  NAVBAR
 -->
<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <div class="preacceuil"><a href="?preacc" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img class="image-fluid" src="./media/pop.png" alt="">
        </a>
      </div>

      <h2 id="titre">Getflix</h2>
      <?php
      // CONTROL ON ADMIN CONNECTION
      if ($_SESSION["auth"] != "root") {
      ?>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="
          <?php
          echo (isset($_SESSION["auth"]) ? "?user_gallery" : "?intro");
          ?>
          " class="nav-link px-2 text-white">Accueil</a></li>
          <?php 
          // CONTROL ON USER CONNECTION
          if (isset($_SESSION["auth"])) { 
            ?>
            <li>
              <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Catégories
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <form action="" method="get">
                    <?php
                    // SQL QUERY TO GET ALL GENRES AVIABLE
                    $baseURL = 'https://api.themoviedb.org/3/';
                    $APIKEY = getenv("MovieDB_API_KEY");
                    $keyword = str_replace(" ", "%", $_GET["search"]);
                    $api_url = $baseURL."genre/movie/list?api_key=".$APIKEY."&language=en-US";
                    // Read JSON file
                    $json_data = file_get_contents($api_url);
                    // Decode JSON data into PHP array
                    $response_data = json_decode($json_data);
                    // All user data exists in 'data' object
                    $genres = $response_data->genres;
                    for ($i = 0; $i < count($genres); $i++) {
                    ?>
                      <li>
                        <button type=submit class="dropdown-item" name="genres" value="<?php echo $genres[$i]->id; ?>">
                          <?php echo $genres[$i]->name; ?></button>
                      </li>
                    <?php
                    } ?>
                  </form>
                </ul>
              </div>
            <?php
          } ?>
            <li>
              <?php
              // CONTROL ON USER CONNECTION
              if (!isset($_SESSION["auth"])) { 
                ?>
            <li><a href="?tarifs" class="nav-link px-2 text-white">Tarifs</a></li>
          <?php } ?>
          <li><a href="#" class="nav-link px-2 text-white">FAQ</a></li>
          <li><a href="#" class="nav-link px-2 text-white">À propos</a></li>
        </ul>
        <?php 
        // CONTROL ON USER CONNECTION
        if (isset($_SESSION["auth"])) {
        ?>
          <form action="" method="get" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <label for="site-search"></label>
            <input type="search" id="site-search" name="search" aria-label="Search through site content">
          </form>
      <?php }
      } ?>
      <div class="text-end">
        <?php
        // CONTROL ON USER CONNECTION  (TERNARY OPERATOR!) 
        if (isset($_SESSION["auth"])) :
        ?>
          <form action="" method="post">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <p class="nav-link  mb-0 text-white"><i class="bi bi-house-door"></i> Welcome <?php echo $_SESSION["auth"]; ?></p>
              <li>
                <a class="nav-link  text-white" aria-current="page" href="?setting"><i class="bi bi-gear"></i> Settings </a>
              </li>
              <li>
                <button type="submit" class="btn btn-secondary  text-white" value="logout" name="logout"><i class="bi bi-arrow-right-square"></i> Log out </button>
              </li>
            </ul>
          </form>
        <?php else :
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