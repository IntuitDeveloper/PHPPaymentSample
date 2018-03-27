<?php
require ("./CurlClient.php");

//Change your Access Token Here
$accessToken = "Bearer " . "eyJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwiYWxnIjoiZGlyIn0..fAZAeNpic9EY3h5zWZQFGQ.QgE71YfiU9o8_fAT2K9pFPKIYaIZY11jtxJIzQm9vtDSmNDk0vWrkjvj_uSf_zEz3TgH3kbk_Dv0yr8JEmEa-XTRE74F2u3upwb6vSoTZgLfqI7cha9CSmsYHRICKuFsvKregzJiEA98OlBcbDTwYpU1WhdFzNBfV_5XDMVbI3dluwwa-TJAWNpIfhIhBIPLQha7gFTCnZmZrj8Vf55PCWJFw07sjBWNPbW5o6rDZAyP7qo6PWvLR78Et2SXAnpxX6Zw6nWrA5zOfyw33-bQg4qQHhBwsAjnJlYJhy7UoNSTd-d4daq4JiRH2LhxhaT5kiCy2qNJQHb3t9wIDyjF3wO2GUJCGKcXK6Sff1Bpe-JhzR2hpa49liUut_JTFkurx8ytHo4lSr-nayenp-CzYr8lHtm73ceWyiPH9mJNRWvck4_DlRYXSznz7l56RgLqaMrKVXJl8Hl7hyLw7SdxR5kqxGeZYHczQ4N5ZqKHMI0FgeHxXDFA9ere407DEoGAu7OGGieQqJDTEKARPnA7aYMU0vIdf_THFlvTSP76Qfovt3_eOCYELgORRC_E3ZlUR66rJC-u_NRrPFm6iaivUUVmJPX7nbdjZpLKnBPeRcBFz47pOLwpN0g3Ivz7rcW5zpDZ7aI1jbVYH5WPyaAlntmWuYUqwVIoWjnz-DCN6mzw3BlsGIy0salJA4yPsZgU.UytV2P4gUT5k5BX09cU2VA";
//Add your request ID here
$requestId = "SomeThingUique";


$baseURL = "https://sandbox.api.intuit.com/quickbooks/v4/payments/charges";
$client = new CurlClient();

$body = [
  "amount" => "10.55",
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


$http_header = array(
      'Accept' => 'application/json',
      'Request-Id' => $requestId,
      'Authorization' => $accessToken,
      'Content-Type' => 'application/json;charset=UTF-8'
);

$intuitResponse = $client->makeAPICall($baseURL, "POST", $http_header, json_encode($body), null, false);

var_dump($intuitResponse );



?>
