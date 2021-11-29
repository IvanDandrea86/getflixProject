<div class="album py-5  d-flex justify-content-center">
    <div class="container ">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php
      if(isset($_GET["genres"])){
  $baseURL = 'https://api.themoviedb.org/3/';
  $keyword=strval($_GET["genres"]);      
  $APIKEY=getenv("MovieDB_API_KEY");
  $api_url = $baseURL."discover/movie?api_key=".$APIKEY."&language=en-US&sort_by=popularity.desc&include_adult=false&vote_average.gte=6&with_genres=".$keyword;
// Read JSON file
$json_data = file_get_contents($api_url);
// Decode JSON data into PHP array
$response_data = json_decode($json_data);
// All user data exists in 'data' object
$films= $response_data->results;
for ($i=0; $i<count($films);$i++){
  if(isset($films[$i]->poster_path)){
?>
        <div class="col" style="max-width:250px;">
          <img class=".img-fluid" width="100%" height="350" role="img" src="https://image.tmdb.org/t/p/w185/<?php echo($films[$i]->poster_path);?>" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
          <div class="card shadow-sm bg-dark">
          <div class="card-body">
            <!-- <p  class="card-text text-light"><?php if(($films[$i]->overview)==""){echo ("Overview not available.");
            }else{  echo($films[$i]->overview);}
            ?></p> -->
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <form action="" method="get">
                  <button type="submit" name="player" value="<?php echo($films[$i]->id);?>"class="btn btn-sm  text-light btn-outline-secondary">Play</button>
                  
                  <button type="button" class="btn btn-sm btn-outline-secondary text-light">Review</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary text-light">Overview</button>
                  </form>
                </div>
                <i class="bi bi-star"></i>
                <small class="text-muted">
                </small>
              </div>
            </div>
          </div>
        </div>
  <?php    }
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