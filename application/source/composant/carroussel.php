<div id="carouselExampleControls" class="carousel slide align-item-center" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="row bg danger">
    
    <?php 
$api_url = "https://api.themoviedb.org/3/trending/movie/week?api_key=cb949532e8d4edcc3566897450dff955";
// Read JSON file
$json_data = file_get_contents($api_url);
// Decode JSON data into PHP array
$response_data = json_decode($json_data);
// All user data exists in 'data' object
$films= $response_data->results;
for($i=0;$i<5;$i++){
?>

<div class="col bg-danger">
<div class="card shadow-sm">
<img class=".img-fluid" width="100%" height="350" role="img" src="https://image.tmdb.org/t/p/w185/<?php echo($films[$i]->poster_path);?>" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
<div class="card-body">
  <p  class="card-text">List Elem</p>
  <div class="d-flex justify-content-between align-items-center">
    <div class="btn-group">
      <button type="button" class="btn btn-sm btn-outline-secondary">Play</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">Review</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">Overview</button>
    </div>
    <i class="bi bi-star"></i>

    <small class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
      <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
    </svg> 
    </small>
  </div>
</div>
</div>
</div>


<?php
}?>
</div>
    </div>
    <div class="carousel-item">
      <img src="./media/spidey.jpg" width="100%" height="500" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./media/hobbit.jpeg" width="100%" height="500" class="d-block w-100" alt="...">
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