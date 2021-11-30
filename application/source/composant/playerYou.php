


<?php
$movieId = $_GET["player"];
echo (strlen($movieId));
$baseURL = 'https://api.themoviedb.org/3/';
$APIKEY = getenv("MovieDB_API_KEY");
$api_url = $baseURL . "movie/" . $movieId . "/videos?api_key=" . $APIKEY;
// Read JSON file
$json_data = file_get_contents($api_url);
// Decode JSON data into PHP array
$response_data = json_decode($json_data);
// print_r($response_data);
// All user data exists in 'data' object
$video = $response_data->results[0]->key;
echo (strlen($video));
?>
<div class="container">

    <div class="row">
        <div class="col-8 bg-danger d-flex p-2 shadow-lg  align-items-center justify-content-center">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo ($video); ?>?rel=0&showinfo=0&autohide=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-4 bg-danger shadow-lg ">INFO FILM HERE</div>
    </div>
    <div class="row">
        <div class="col-8 d-flex bg-danger shadow-lg  align-items-center justify-content-center"><div class="panel panel-default">
<div class="panel-heading">Submit Your Comments</div>
  <div class="panel-body">
  	<form method="post">
  	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Subject</label>
	    <textarea name="subject" class="form-control" rows="3"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div>

        </div>

    </div>
</div>