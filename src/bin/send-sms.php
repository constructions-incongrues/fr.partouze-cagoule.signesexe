<?php
require(__DIR__.'/../vendor/autoload.php');

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');

// Parameters
$sid = getenv('TWILIO_SID'); // Your Account SID from www.twilio.com/console
$token = getenv('TWILIO_TOKEN'); // Your Auth Token from www.twilio.com/console

// Input
$destNumber = $_SERVER['argv'][1];
$sextos = file(__DIR__.'/../public/database-verified.txt');
$messageBody = sprintf("%s- Signé S.", $sextos[array_rand($sextos)]);

// Send the mesage !
$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  $destNumber, // Text this number
  array(
    'from' => '+33644640908', // From a valid Twilio number
    'body' => html_entity_decode($messageBody, ENT_QUOTES | ENT_XML1, 'UTF-8')
  )
);

echo sprintf('Sexto envoyé - number="%s", twilio_sid="%s"', $destNumber, $message->sid), "\n";
