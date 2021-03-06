<div class="container">
    <div class="row" >
        <div id="myCarousel"  class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <?php
                    // API QUERY TO GET TRENDING MOVIES
                    $api_url = "https://api.themoviedb.org/3/trending/movie/week?api_key=".getenv("MovieDB_API_KEY");
                    // Read JSON file
                    $json_data = file_get_contents($api_url);
                    // Decode JSON data into PHP array
                    $response_data = json_decode($json_data);
                    // All user data exists in 'data' object
                    $films = $response_data->results;
                    ?>
            <div class="carousel-inner">
            <div class="carousel-item  embed-responsive-item " style="height:60vh;
            /* background-size:cover; */
            background-position: center;
            background-size:cover;
            background-repeat:no-repeat;
            background-image:url('https://image.tmdb.org/t/p/w500/<?php echo ($films[0]->backdrop_path); ?>');">
                <div class="container">
                <div class="carousel-caption  text-start">
                    <h1><?php echo ($films[0]->original_title);?></h1>
                    <p><?php echo ($films[0]->overview);?></p>
                    <p><a class="btn btn-lg btn-warning" href="?player=<?php echo($films[0]->id);?>">Watch Now</a></p>
                </div>
                </div>
            </div>
            <div class="carousel-item embed-responsive-item active" style="height:60vh;
            background-size:cover;
            background-position: center;
            background-repeat:no-repeat;
            background-image:url('https://image.tmdb.org/t/p/w500/<?php echo ($films[1]->backdrop_path); ?>');">
                <div class="container">
                <div class="carousel-caption text-start text-dark">
                <h1><?php echo ($films[1]->original_title);?></h1>
                    <p><?php echo ($films[1]->overview);?></p>
                    <p><a class="btn btn-lg btn-danger" href="?player=<?php echo($films[1]->id);?>">Watch Now</a></p>
                </div>
                </div>
            </div>
            <div class="carousel-item embed-responsive-item " style="height:60vh;
            background-size:cover;
            background-position: center;
            background-repeat:no-repeat;
            background-image:url('https://image.tmdb.org/t/p/w500/<?php echo ($films[2]->backdrop_path); ?>');">
                <div class="container">
                <div class="carousel-caption text-end ">
                <h1><?php echo ($films[2]->original_title);?></h1>
                    <p><?php echo ($films[2]->overview);?></p>
                    <p><a class="btn btn-lg btn-danger" href="?player=<?php echo($films[2]->id);?>">Watch Now</a></p>
                </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
     </div>
<div class="row">
 
    <div id="carouselExampleControls" class="carousel m-4 slide align-item-center" data-bs-ride="carousel">
  
      <div class="carousel-inner">
        <!-- carousel item -->
      
        <!-- carousel item  BEST OF THE WEEK-->
        <div class="carousel-item active">
          <div class="row bg danger">
          <h1 class="text-light">Best of the week</h1>
            <?php
            // API QUERY TO GET TRENDING MOVIES
            $api_url = "https://api.themoviedb.org/3/trending/movie/week?api_key=" . getenv("MovieDB_API_KEY");
            // Read JSON file
            $json_data = file_get_contents($api_url);
            // Decode JSON data into PHP array
            $response_data = json_decode($json_data);
            // All user data exists in 'data' object
            $films = $response_data->results;
            for ($i = 0; $i < 6; $i++) {
            ?>
              <div class="col" >
                <div class="card border-0" id="film-card">
                  <img class="img-fluid mw-25"   role="img" src="https://image.tmdb.org/t/p/w342/<?php echo ($films[$i]->poster_path); ?>" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
                  <div class="card-body">   
                    <div class="btn-group me-2 d-flex justify-content-between align-items-center">
                  <form action="" method="get" class="">
                  <button type="submit" name="player" value="<?php echo($films[$i]->id);?>"class="btn btn-sm  text-light btn-outline-secondary">Play</button>
                  </form> 
                        <span class="badge rounded-pill<?php
                if (floatval($films[$i]->vote_average) < 3){
                  echo (" bg-danger ");
                }elseif(floatval($films[$i]->vote_average) <6){
                  echo (" bg-warning ");
                }else{ echo (" bg-success ");}
                ?>text-dark"><?php echo($films[$i]->vote_average);?></span>            
                     </div>
                  </div>
                </div>
                
              </div>
            <?php
            } ?>
          </div>
        </div>

        <!-- carousel item -->
        <div class="carousel-item">
          <div class="row bg danger">
          <h1 class="text-light">Top rated in Belgium</h1>
            <?php
            // API QUERY TO GET TRENDING MOVIES
            $api_url = "https://api.themoviedb.org/3/movie/top_rated?api_key=".getenv("MovieDB_API_KEY")."&language=fr-FR";
            // Read JSON file
            $json_data = file_get_contents($api_url);
            // Decode JSON data into PHP array
            $response_data = json_decode($json_data);
            // All user data exists in 'data' object
            $films = $response_data->results;
            for ($i = 0; $i < 6; $i++) {
            ?>
              <div class="col" >
                
                <div class="card border-0" id="film-card">
                  <img class="img-fluid mw-25"   role="img" src="https://image.tmdb.org/t/p/w342/<?php echo ($films[$i]->poster_path); ?>" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
                  <div class="card-body">   
                    <div class="btn-group me-2 d-flex justify-content-between align-items-center">
                  <form action="" method="get" class="">
                  <button type="submit" name="player" value="<?php echo($films[$i]->id);?>"class="btn btn-sm  text-light btn-outline-secondary">Play</button>
                  </form> 
                        <span class="badge rounded-pill<?php
                if (floatval($films[$i]->vote_average) < 3){
                  echo (" bg-danger ");
                }elseif(floatval($films[$i]->vote_average) <6){
                  echo (" bg-warning ");
                }else{ echo (" bg-success ");}
                ?>text-dark"><?php echo($films[$i]->vote_average);?></span>            
                     </div>
                  </div>
                </div>
                
              </div>
            <?php
            } ?>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row bg danger">
          <h1 class="text-light">Best Action</h1>
            <?php
            $films = getGenresList(28);
            for ($i = 0; $i < 6; $i++) {
            ?>
              <div class="col" >
                
                <div class="card border-0" id="film-card">
                  <img class="img-fluid mw-25"   role="img" src="https://image.tmdb.org/t/p/w342/<?php echo ($films[$i]->poster_path); ?>" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
                  <div class="card-body">   
                    <div class="btn-group me-2 d-flex justify-content-between align-items-center">
                  <form action="" method="get" class="">
                  <button type="submit" name="player" value="<?php echo($films[$i]->id);?>"class="btn btn-sm  text-light btn-outline-secondary">Play</button>
                  </form> 
                        <span class="badge rounded-pill<?php
                if (floatval($films[$i]->vote_average) < 3){
                  echo (" bg-danger ");
                }elseif(floatval($films[$i]->vote_average) <6){
                  echo (" bg-warning ");
                }else{ echo (" bg-success ");}
                ?>text-dark"><?php echo($films[$i]->vote_average);?></span>            
                     </div>
                  </div>
                </div>
                
              </div>
            <?php
            } ?>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row bg danger">
          <h1 class="text-light">Best Horror</h1>
            <?php
           
            $films = getGenresList(27);
            for ($i = 0; $i < 6; $i++) {
            ?>
              <div class="col" >
                
                <div class="card border-0 " id="film-card">
                  <img class="img-fluid mw-25 "   role="img" src="https://image.tmdb.org/t/p/w342/<?php echo ($films[$i]->poster_path); ?>" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
                  <div class="card-body">   
                    <div class="btn-group me-2 d-flex justify-content-between align-items-center">
                  <form action="" method="get" class="">
                  <button type="submit" name="player" value="<?php echo($films[$i]->id);?>"class="btn btn-sm  text-light btn-outline-secondary">Play</button>
                  </form> 
                        <span class="badge rounded-pill<?php
                if (floatval($films[$i]->vote_average) < 3){
                  echo (" bg-danger ");
                }elseif(floatval($films[$i]->vote_average) <6){
                  echo (" bg-warning ");
                }else{ echo (" bg-success ");}
                ?>text-dark"><?php echo($films[$i]->vote_average);?></span>            
                     </div>
                  </div>
                </div>
                
              </div>
            <?php
            } ?>
          </div>
        </div>
           
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
  </div>
  </div>