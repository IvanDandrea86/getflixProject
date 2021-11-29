
<div class="container">
<h1 class="text-center text-dark">Best of the week</h1>
<div class="row ">
    
                <?php 
          $api_url = "https://api.themoviedb.org/3/trending/movie/week?api_key=".getenv("MovieDB_API_KEY");
          // Read JSON file
          $json_data = file_get_contents($api_url);
          // Decode JSON data into PHP array
          $response_data = json_decode($json_data);
          // All user data exists in 'data' object
          $films= $response_data->results;
          for($i=0;$i<5;$i++){
        ?>
        
       <div class="col">
            <div class="card shadow-sm">
            <img class=".img-fluid" width="100%" height="350" role="img" src="https://image.tmdb.org/t/p/w185/<?php echo($films[$i]->poster_path);?>" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
            <div class="card-body bg-dark">
              <p  class="card-text"><?php echo($films[$i]->original_title);?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-danger">Play</button>
                  <button type="button" class="btn btn-sm btn-warning">Review</button>
                  <button type="button" class="btn btn-sm btn-info">Overview</button>
                </div>
                <i class="bi bi-star"></i>

                <small class="text-muted">
                </small>
              </div>
            </div>
          </div>
          </div>
          
        
    <?php
}?>
</div>

<h1 class="text-center">Highest rating</h1>
<div class="row ">
    
                <?php 
          $api_url = "https://api.themoviedb.org/3/discover/movie?api_key=".getenv("MovieDB_API_KEY")."&language=en-US&sort_by=vote_count.desc&include_adult=false&include_video=false&page=1&with_watch_monetization_types=flatrate";
          // Read JSON file
          $json_data = file_get_contents($api_url);
          // Decode JSON data into PHP array
          $response_data = json_decode($json_data);
          // All user data exists in 'data' object
          $films= $response_data->results;
          for($i=0;$i<5;$i++){
        ?>
        
       <div class="col">
            <div class="card shadow-sm">
            <img class=".img-fluid" width="100%" height="350" role="img" src="https://image.tmdb.org/t/p/w185/<?php echo($films[$i]->poster_path);?>" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
            <div class="card-body">
              <p  class="card-text"><?php echo($films[$i]->original_title);?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-danger">Play</button>
                  <button type="button" class="btn btn-sm btn-warning">Review</button>
                  <button type="button" class="btn btn-sm btn-info">Overview</button>
                </div>
                <i class="bi bi-star"></i>

                <small class="text-muted"></small>
              </div>
            </div>
          </div>
          </div>
          
        
    <?php
}?>
</div>


<h1 class="text-center">Last Arrived</h1>
<div class="row ">
    
                <?php 
          $api_url = "https://api.themoviedb.org/3/discover/movie?api_key=".getenv("MovieDB_API_KEY")."&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&year=2021&with_watch_monetization_types=flatrate";
          // Read JSON file
          $json_data = file_get_contents($api_url);
          // Decode JSON data into PHP array
          $response_data = json_decode($json_data);
          // All user data exists in 'data' object
          $films= $response_data->results;
         
          for($i=0;$i<5;$i++){
            
        ?>
        
       <div class="col">
            <div class="card shadow-sm">
            <img class=".img-fluid" width="100%" height="350" role="img" src="https://image.tmdb.org/t/p/w185/<?php echo($films[$i]->poster_path);?>" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
            <div class="card-body">
              <p  class="card-text"><?php echo($films[$i]->original_title);?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" id="<?php echo($films[$i]->original_title);?>" class="btn btn-sm btn-danger">Play</button>
                  <button type="button" class="btn btn-sm btn-warning">Review</button>
                  <button type="button" class="btn btn-sm btn-info">Overview</button>
                </div>
                <i class="bi bi-star"></i>

                <small class="text-muted"></small>
              </div>
            </div>
          </div>
          </div>
          
        
    <?php
}?>
</div>

</div>
     
            


