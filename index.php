<?php $url = 'http://localhost:8080/api_codeigniter/api/example/user/';

//API key
$apiKey = 'CODEX@123';

//Auth credentials
$username = "admin";
$password = "1234";

//create a new cURL resource
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

$result = curl_exec($ch);
print_r("RESULT");
print_r($result);exit;
//close cURL resource
curl_close($ch);
?>