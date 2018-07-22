<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC8f085bdb878c693232dbb3f802bdcbd7';
$token = 'c29a1063e1be0b30feb9adba117e7c34';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+917387918599',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+12252636591',
        // the body of the text message you'd like to send
        'body' => 'Hey John! Good luck on the Twilio session!'
    )
);
echo "Your message has been sent successfully";
?>
