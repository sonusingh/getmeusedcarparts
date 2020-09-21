<h1>GetMeUsedCarParts Wrecker Location API for Australia, New Zealand, USA and Canada</h1>
<h2>Accessing a list of wreckers near a given location</h2>
<p>Using your preferred programming language an API call can be made to the URL: <a href="https://getmeusedcarparts.com/d?l=lat,lon">https://getmeusedcarparts.com/d?l=lat,lon</a> 
The parameter that needs to be supplied is <b>l</b>, i.e. location</a> The location (<b>l</b>) is in the format:
<pre>l=latitude,longitude</pre>
</p>

<h3>PHP Example</h3>
The below code uses PHP CURL to get the results in JSON format. In this example we are looking for car wreckers in Brisbane, Australia. The coordinates for this location are:
<pre>l=<font color='red'>-27.470822</font>,<font color='blue'>153.025063</font></pre>

Here is the complete PHP code:

<pre>
//let the browser know we are expecting JSON output
header('Content-Type: application/json; charset=utf-8');

// create & initialize a curl session
$curl = curl_init();

// set our url with curl_setopt()
curl_setopt($curl, CURLOPT_URL, "https://getmeusedcarparts.com/d?l=-27.470822,153.025063");

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
</pre>

<p>The results will be send back in JSON format:</p>

<pre>
[
  {
    "wrecker_name": "Southside 4X4 Wreckers",
    "wrecker_address": "ONLINE ONLY",
    "wrecker_phone": "(07) 3274 1222",
    "wrecker_distance": "0.6 km(s)"
  },
  {
    "wrecker_name": "Northside Auto Recyclers & Cash For Cars",
    "wrecker_address": "590 Rode Rd Chermside QLD 4032",
    "wrecker_phone": "(07) 3359 8688",
    "wrecker_distance": "8.7 km(s)"
  },
  {
    "wrecker_name": "Qld Wreckers",
    "wrecker_address": "50 Macbarry Pl Rocklea QLD 4106",
    "wrecker_phone": "(07) 3393 9929",
    "wrecker_distance": "9.1 km(s)"
  },
  {
    "wrecker_name": "Express Auto Wreckers",
    "wrecker_address": "71 Dollis St Rocklea QLD 4106",
    "wrecker_phone": "0432 980 298",
    "wrecker_distance": "9.5 km(s)"
  },
  {
    "wrecker_name": "Wholesale Car Parts Plus",
    "wrecker_address": "80 Grindle Rd Rocklea QLD 4106",
    "wrecker_phone": "(07) 3733 1986",
    "wrecker_distance": "9.7 km(s)"
  },
  {
    "credits": "https://GetMeUsedCarParts.com"
  }
]
</pre>

<h3>What are limitations to using Car Wreckers Data API?</h3>

<p>The API only returns results for coordinates that are inside Australia, New Zealand, USA and Canada. The results are limited to the five closest wreckers sort in
the order of closest first to the given lat and lon coordinates.</p>

<h3>Usage requirements</h3>

<p>If using the API in your website/app, please provide a link to <a href="https://getmeusedcarparts.com/">Wreckers/Auto Dismantlers Near You API</a></p>
