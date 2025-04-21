<?php
include 'config.php';

$url = "https://api.clashroyale.com/v1/cards"; // Replace with correct endpoint like /players/#TAG/battlelog or others

$headers = [
    "Accept: application/json",
    "Authorization: Bearer $apiToken"
];

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers
]);

$response = curl_exec($ch);
$httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($httpStatus === 200) {
    header('Content-Type: application/json');
    echo $response;
} else {
    echo json_encode(["error" => "API call failed", "code" => $httpStatus]);
}

curl_close($ch);
?>