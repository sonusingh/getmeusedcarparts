<?php
//let the browser know we are expecting JSON output
header('Content-Type: application/json; charset=utf-8');

// create & initialize a curl session
$curl = curl_init();

// set our url with curl_setopt()
curl_setopt($curl, CURLOPT_URL, "https://getmeusedcarparts.com/d?l=-33.848764,150.938124");

// return the transfer as a string, also with setopt()
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// curl_exec() executes the started curl session
// $output contains the output string
$output = curl_exec($curl);

//display the results 
echo $output;

// close curl resource to free up system resources
// (deletes the variable made by curl_init)
curl_close($curl);
?>
