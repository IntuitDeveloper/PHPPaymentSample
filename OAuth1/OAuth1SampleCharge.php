
<?php
require ("./CurlClient.php");
require ("./OAuth1.php");

$baseURL = "https://sandbox.api.intuit.com/quickbooks/v4/payments/charges";
$client = new CurlClient();
$body = [
"amount" => "1111.32",
"card" => [
"expYear" => "2020",
"expMonth" => "02",
"address" => [
"region" => "CA",
"postalCode" => "94086",
"streetAddress" => "1130 Kifer Rd",
"country" => "US",
"city" => "Sunnyvale"
],
"name" => "emulate=0",
"cvc" => "123",
"number" => "4111111111111111"
],
"currency" => "USD",
"context" => [
"mobile" => "false",
"isEcommerce" => "true"
]
];
$myOauth = new OAuth1("qyprdeipEspIDXWWXs3ibnduOcm1zf","UMNNB7ZlJ9U0hqUoAFV849bNbUrYbyukZWkwJWWz","qyprdtqpKBCMRMbh6KLouhzhQPoODVUG25wZZDgMTX6JQNWl","NCN4bidai72XehsuxFTAMFvqko7nJdMvzPDd9Dza");
$accessToken = $myOauth->getOAuthHeader($baseURL, array(), "POST");
$http_header = array(
  'Accept' => 'application/json',
  'Request-Id' => "ThisIsAfdifferetAAA",
  'Authorization' => $accessToken,
  'Content-Type' => 'application/json;charset=UTF-8'
);

$intuitResponse = $client->makeAPICall($baseURL, "POST", $http_header, json_encode($body), null, false);
var_dump($intuitResponse );
?>
