<?php

$movieId = $_GET["player"];
$video = getMovieId($movieId);
$film_det = getDetail($movieId);
include('./Composant_php/add_comment.php');

?>
<div class="container">
  <div class="row">
    <div class="col-6  d-flex p-2 shadow-lg  align-items-center justify-content-center">
      <iframe width="100%" height="350" src="https://www.youtube.com/embed/<?php echo ($video); ?>?rel=0&showinfo=0&autohide=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-6  ">
      <div class="row p-2">
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
  </div>
  <div class="row">
    <div class="col-6">
    <div class=" row p-2">   
          <div class=" row bg-dark text-light p-2 rounded">
            <div class="user-info">
              <div class="d-flex flex-row justify-content-between ms-2">
                <div class="d-flex flex-row justify-content-between align-items-center  ">
                  <img class="rounded-circle" src="https://eu.ui-avatars.com/api/?name=<?php
                  echo($_SESSION["auth"]);
                  ?>" width="40">
                  <h5 class="m-2"><?php echo($_SESSION["auth"]);?>
                  </h5>
                </div>
              </div>
            </div>
            <div class="mt-3 border-secondary border">
            <form action="" method="post" class="form-group flex-column d-flex justify-content-between">
        <textarea class="form-control m-2 shadow textarea" name="subject"></textarea>
        
      <div class="mt-2 ">
        <button class="btn btn-danger btn-sm shadow-none" type="submit" name="submit_comment"  > Post comment</button>
        <button class="btn btn-outline-secondary btn-sm ml-1 shadow-none" type="button">Cancel</button>
        </div>
      </form>
                </div>
          </div>
          </div>
  </div>

    <div class="col-6 overflow-auto" style="max-height:50vh">
  
    <?php
    $sql = "SELECT *FROM comments WHERE `comments`.`Movie_ref`=$film_det->id ORDER BY `Date_comment` DESC;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
          <div class=" row p-2"> 
          <div class=" row bg-dark text-light p-2 rounded">
            <div class="user-info overflow-auto">
              <div class="d-flex flex-row justify-content-between ms-2">
                <div class="d-flex flex-row justify-content-between align-items-center  ">
                  <img class="rounded-circle" src="https://eu.ui-avatars.com/api/?name=<?php
                  $name=getUserName($row["User_id"]);
                  echo($name);
                  ?>" width="40">
                  <h5 class="m-2"><?php $name=getUserName($row["User_id"]);
                  echo($name);?>
                  </h5>
                </div>
                <p class="date text-light-50"><?php echo($row["Date_comment"])?></p>
              </div>
            </div>
            <div class="mt-3 border-secondary border">
              <p class="comment-text p-2 "><?php echo($row["Comment_text"]) ?></p>
            </div>
          </div>
          </div>
      <?php }   
    }   
      ?>
  </div>
  
</div>