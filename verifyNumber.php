<?php
// Get the PHP helper library from twilio.com/docs/php/install
include('./vendor/autoload.php');
use Twilio\Rest\Client; // Loads the library 

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$token = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$client = new Client($sid, $token);

$validationRequest = $client->validationRequests->create(
    "+xxxxxxxxxx",
    array(
        "friendlyName" => "My Home Phone Number"
    )
);

echo $validationRequest->validationCode;