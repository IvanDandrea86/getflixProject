
<?php   
$movieId=$_GET["player"];
$video=getMovieId($movieId);
$film_det=getDetail($movieId);
?>
<div class="container">
<div class="row">
    <div class="col-6 bg-danger d-flex p-2 shadow-lg  align-items-center justify-content-center">
<iframe width="100%" height="350" 
src="https://www.youtube.com/embed/<?php echo($video);?>?rel=0&showinfo=0&autohide=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen></iframe>
</div>
<div class="col-6 bg-danger  ">
<div class="row"><div class="card">
  <div class="card-header">
  <?php print_r($film_det->original_title);?>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php print_r($film_det->release_date);?></h5>
    <p class="card-text"><?php if(($film_det->overview)==""){echo ("Overview not available.");
            }else{  echo($film_det->overview);}
            ?></p>
  </div>
</div></div>
<div class="row">
<p> AJOUTER COMMENT ELEMENT
</p>
</div>    
</div>
</div>
<div class="row">
<div class="col-8 d-flex bg-danger shadow-lg  align-items-center justify-content-center"><div class="panel panel-default">
<div class="panel-heading">Submit Your Comments</div>
  <div class="panel-body">
  	<form method="post">
	  <div class="form-group">
	    <label for="exampleInputPassword1">Subject</label>
	    <textarea name="subject" class="form-control" rows="3"></textarea>
	  </div>
	  <button type="submit" name= "submit_comment" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div></div>

</div>

        </div>

    </div>
</div>