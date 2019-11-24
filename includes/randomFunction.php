<?php
/**Function for getting the comic title and date for random comic for random comic */
function getComicRand(){
$randNum = rand(1,2208);
$url = 'https://xkcd.com/'. $randNum. '/'.'info.0.json';
/**dont change
*/
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt_array($handle,
array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true
)
);
$output = curl_exec($handle);
$response = json_decode($output, true);
curl_close($handle);
/*dont change
*/
echo '<div><h1>' . $response["title"] . '</h1></div>';
echo '<br>';
echo '<h4>' . $response["month"] . '/' . $response["day"] . '/'. $response["year"] . '</h4>';
echo '<div class="d-flex justify-content-center"> <img src = ' . $response["img"] .'></div>';
}
$random = true ;
if(isset($random)){
    getComicRand();
}
?>