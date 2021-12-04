    <div class="container-fluid ">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-center mt-3">
      <?php
      if(isset($_GET["genres"])){
      $keyword=strval($_GET["genres"]);  
      $films=getGenresList($keyword);
      for ($i=0; $i<count($films);$i++){
      if(isset($films[$i]->poster_path)){
      ?>
        <div class="col" style="max-width:250px;">
          <div class="card" id="film-card">
          <img class=".img-fluid" width="100%" height="320" role="img" src="https://image.tmdb.org/t/p/w185/<?php echo($films[$i]->poster_path);?>" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
          <div class="card-body" >
            <!-- <p  class="card-text text-light"><?php if(($films[$i]->overview)==""){echo ("Overview not available.");
            }else{  echo($films[$i]->overview);}
            ?></p> -->
          
                <div class="btn-group d-flex justify-content-between align-items-center">
                  <form action="" method="get">
                  <button type="submit" name="player" value="<?php echo($films[$i]->id);?>" class="btn btn-sm  text-light btn-outline-secondary">Play</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary text-light" data-bs-toggle="modal" data-bs-target="#popUpOverview<?php echo($films[$i]->id); ?>">Overview</button>
                <?php
                  include("./composant/popUpOverview.php");
                  ?>  
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
  <!-- </div> -->
  