<?php
function searchAboutTrain($trainNum)
{
$curl = curl_init();

curl_setopt_array($curl, [
CURLOPT_URL => "https://irctc1.p.rapidapi.com/api/v1/searchTrain?query=$trainNum",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => [
"X-RapidAPI-Host: irctc1.p.rapidapi.com",
"X-RapidAPI-Key: 0876f8c780msh4f08874338563f1p1a5f37jsn15090cd88cda"
],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
echo "cURL Error #:" . $err;
} else {
return $response;
}
}