<?php  

function getDetail($id){
    $baseURL = 'https://api.themoviedb.org/3/';
    $APIKEY=getenv("MovieDB_API_KEY");
    $api_url = $baseURL."movie/".$id."?api_key=".$APIKEY."&language=en-US";
  $json_data = file_get_contents($api_url);
  $response_data = json_decode($json_data);
  $details= $response_data;
  return $details;
}

function getMovieId($id){
$baseURL = 'https://api.themoviedb.org/3/';
$APIKEY=getenv("MovieDB_API_KEY");
$api_url = $baseURL."movie/".$id."/videos?api_key=".$APIKEY;
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$video= $response_data->results[0]->key;
return $video;
}

function getGenresList($key){
    $baseURL = 'https://api.themoviedb.org/3/';   
    $APIKEY=getenv("MovieDB_API_KEY");
    $api_url = $baseURL."discover/movie?api_key=".$APIKEY."&language=en-US&sort_by=popularity.desc&include_adult=false&vote_average.gte=6&with_genres=".$key;
    $json_data = file_get_contents($api_url);
    $response_data = json_decode($json_data);
    $films= $response_data->results;
    return $films;
}

function searchTitle($key){
    $baseURL = 'https://api.themoviedb.org/3/';
    $APIKEY=getenv("MovieDB_API_KEY");
    $api_url = $baseURL."search/movie?api_key=".$APIKEY."&query=".$key;
    $json_data = file_get_contents($api_url);
    $response_data = json_decode($json_data);
    $films= $response_data->results;
    return $films;
}

function getUserName($id){
    include 'config.php' ;
    $sql = "SELECT *FROM Users WHERE `Users`.`Id`=$id";
    $result = $conn->query($sql);
    if ($result->num_rows ==1) {
      $row = $result->fetch_assoc();
        return $row["Username"];
}
}
?>