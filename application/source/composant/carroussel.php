<div class="d-flex align-items-center justify-content-center">
  <div class=" row px-4 py-5  text-center">
    <div id="carouselExampleControls" class="carousel slide align-item-center" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- carousel item -->
        <div class="carousel-item active">
          <div class="row bg danger">

            <?php
            // API QUERY TO GET TRENDING MOVIES
            $api_url = "https://api.themoviedb.org/3/trending/movie/week?api_key=" . getenv("MovieDB_API_KEY");
            // Read JSON file
            $json_data = file_get_contents($api_url);
            // Decode JSON data into PHP array
            $response_data = json_decode($json_data);
            // All user data exists in 'data' object
            $films = $response_data->results;
            for ($i = 0; $i < 5; $i++) {
            ?>
              <div class="col">
                <div class="card sh border-0">
                  <img class=".img-fluid" width="100%" height="350" role="img" src="https://image.tmdb.org/t/p/w185/<?php echo ($films[$i]->poster_path); ?>" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
                  <div class="card-body">
                    <p class="card-text"></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-danger">Play</button>
                        <button type="button" class="btn btn-sm btn-warning">Review</button>
                        <button type="button" class="btn btn-sm btn-info">Overview</button>
                      </div>
                      <i class="bi bi-star"></i>
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
          <div class="col bg-danger">
            <div class="card shadow-sm">
              <img class=".img-fluid" width="100%" height="350" role="img" src="./media/spidey.jpg" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
              <div class="card-body">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Play</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Review</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Overview</button>
                  </div>
                  <i class="bi bi-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- carousel item -->
        <div class="carousel-item">
        <div class="col bg-danger">
            <div class="card shadow-sm">
              <img class=".img-fluid" width="100%" height="350" role="img" src="./media/hobbit.jpeg" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Play</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Review</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Overview</button>
                  </div>
                  <i class="bi bi-star"></i>
                </div>
            </div>
          </div>
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