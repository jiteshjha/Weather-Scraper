<?php 

/* This code gets the city that the user enters into the form on index.php, then removes any spaces in the city name using str_replace. After, using regex we get the contents of our weather forecast website using file_get_contacts. Once that's done, we get the pertinent information from the website using preg_match: in this case, the 3 day forecast. */

$city = $_GET['city'];

$city = str_replace(" ", "", $city);

$contents = file_get_contents('http://www.weather-forecast.com/locations/'.$city.'/forecasts/latest');

preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);

echo($matches[1]);
?>