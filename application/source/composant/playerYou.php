<?php   
$movieId=$_GET["player"];
echo(strlen($movieId));

$baseURL = 'https://api.themoviedb.org/3/';
$APIKEY=getenv("MovieDB_API_KEY");


$api_url = $baseURL."movie/".$movieId."/videos?api_key=".$APIKEY;
// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);
// print_r($response_data);
// All user data exists in 'data' object
$video= $response_data->results[0]->key;
echo(strlen($video));
?>
<div class="container">
    <div class="d-flex align-items-center justify-content-center">
<iframe width="560" height="315" 
src="https://www.youtube.com/embed/<?php echo($video);?>?rel=0&showinfo=0&autohide=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen></iframe>
</div>
</div>