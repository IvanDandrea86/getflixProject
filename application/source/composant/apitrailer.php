<?php
$title=strtolower(str_replace(" ","%",$_GET["player"]));
// create curl resource
$ch = curl_init();
// set url
curl_setopt($ch, CURLOPT_URL, "http://simpleapi.traileraddict.com/greenberg/trailer");
//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output contains the output string
$output = curl_exec($ch);
// close curl resource to free up system resources
curl_close($ch);
// load the previously downloaded XML page
$upcoming = simplexml_load_string($output);
foreach($upcoming->trailer as $x => $updates)
{
   echo $updates->embed_standard;
}       ?>