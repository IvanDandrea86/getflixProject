<?php

$movieId = $_GET["player"];
$video = getMovieId($movieId);
$film_det = getDetail($movieId);
include('./Composant_php/add_comment.php');
?>
<div class="container-fluid">
  <!-- IFRAME WITH MOVIE -->
  <div class="row d-flex justify-content-center mt-5">
    <div class="col col-lg-6 col-md-6 shadow-secondary  rounded ">
      <iframe class= "rounded"width="100%" height="350" src="https://www.youtube.com/embed/<?php echo ($video); ?>?rel=0&showinfo=0&autohide=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
      </div>
      <!-- INFO FILM -->
  <div class="row mb-2 d-flex justify-content-center">
    <div class="col col-lg-6 col-md-6">
    <div class="card bg-dark text-light">
      <div class="card-header">
        <div class="card-title d-flex justify-content-between ">
        <h5><?php print_r($film_det->original_title); ?></h5>
        <p class="text-end"><?php print_r($film_det->release_date); ?></p>
      </div>
      </div>
      <div class="card-body">
        <p class="card-text"><?php if (($film_det->overview) == "") {
                                echo ("Overview not available.");
                              } else {
                                echo ($film_det->overview);
                              }
                              ?></p>
      </div>
    </div>
    </div>
  </div>
  <!-- COMMENTS LIST -->
    <?php
    $sql = "SELECT *FROM comments WHERE `comments`.`Movie_ref`=$film_det->id ORDER BY `Date_comment` DESC;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
          <div class="row mb-2 d-flex justify-content-center">
          <div class="col col-lg-6 col-md-6 p-2 text-light rounded">
            <div class="card bg-dark">
              <div class="d-flex flex-row justify-content-between card-header ">
                <div class="d-flex flex-row justify-content-between align-items-center  ">
                  <img class="rounded-circle" src="https://eu.ui-avatars.com/api/?name=<?php
                  $name=getUserName($row["User_id"]);
                  echo($name);
                  ?>" width="40">
                  <h5 class="m-2"><?php $name=getUserName($row["User_id"]);
                  echo($name);?>
                  </h5>
                </div>
                <p class="date text-light "><?php echo($row["Date_comment"])?></p>
              </div>
            
            <div class=" border border-secondary border m-2 card-body">
              <p class="comment-text p-1 "><?php echo($row["Comment_text"]) ?></p>
            </div>
            </div>
          </div>
          </div>
          
      <?php }   
    }   
      ?>

      <!-- INSERT COMMENT -->
      <div class="row mb-2 d-flex justify-content-center">
          <div class="col col-lg-6 col-md-6 p-2 text-light rounded">
            <div class="card bg-dark">
              <div class="d-flex flex-row justify-content-between card-header ">
                <div class="d-flex flex-row justify-content-between align-items-center  ">
                  <img class="rounded-circle" src="https://eu.ui-avatars.com/api/?name=<?php echo($_SESSION["auth"]);?>
                  " width="40">
                  <h5 class="m-2"><?php echo($_SESSION["auth"]);?>
                  </h5>
                </div>
                <p class="date text-light "><?php ?></p>
              </div>
            
            <div class=" border border-secondary border m-2 card-body">
            <form action="" method="post" class="form-group flex-column d-flex justify-content-between">
        <textarea class="form-control 
        <?php echo (isset($comment_err)) ? 'is-invalid' : ''; ?>
                         shadow textarea" name="subject"></textarea>                 
            <span class="invalid-feedback"><?php echo $comment_err; ?></span>
      <div class="mt-2 d-flex justify-content-end">
        <button class="btn btn-danger m-2 btn-sm shadow-none" type="submit" name="submit_comment"  > Post comment</button>
        <button class="btn btn-outline-secondary btn-sm m-2 shadow-none" type="button">Cancel</button>
        </div>
        </div>
      </form>
            </div>
            </div>
          </div>

</div>