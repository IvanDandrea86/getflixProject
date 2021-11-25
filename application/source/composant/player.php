<?php

$title=str_replace(" ","%",$_GET["player"]);
$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://imdb8.p.rapidapi.com/title/find?q=".$title,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: imdb8.p.rapidapi.com",
		"x-rapidapi-key: 37b9ca1b01msha9517aa0e7e3cc3p1ec8e5jsnf87e2c8c7974"
	],
]);
$response = curl_exec($curl);
$err = curl_error($curl);


curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
  $data =json_decode($response);
  $title=$data->results[0]->id;
}

$title_film=substr($title,7,9);

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://imdb8.p.rapidapi.com/title/get-videos?tconst=".$title_film."&limit=25&region=US",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: imdb8.p.rapidapi.com",
		"x-rapidapi-key: 37b9ca1b01msha9517aa0e7e3cc3p1ec8e5jsnf87e2c8c7974"
	],
]);

$response1 = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {

  $data_video =json_decode($response1);
$video=$data_video->resource;
$video_dec=$video->videos[0]->id;
  $video_link=substr($video_dec,9,10);
 }
?>
 <link rel="stylesheet" type="text/css" href="//cdn.traileraddict.com/css/rembed.css">
<div class="outer-embed-ta"> 
     <iframe width="100%" src="http://api.traileraddict.com/?film=<?php 
     echo(strtolower(str_replace(" ","-",$films[$i]->original_title)));
     ?>
    &count=1" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" scrolling="no" class="embed-ta"></iframe> -->
     <iframe width="100%" src="https://www.imdb.com/video/imdb/<?php
     echo($video_link);
      ?>
     /imdb/embed?autoplay=false" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" scrolling="no" class="embed-ta"></iframe>   
    </div>
     
    
    
