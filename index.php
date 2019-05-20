<?php

require __DIR__ . "/./vendor/autoload.php";

// throw new Exception('sjdsk');

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Twilio\Twiml;
use BotMan\Drivers\Web\WebDriver;

$config = [
    'twilio' => [
         // Enter your token here
        'token' => '#####',
    ]
];

// Load the driver(s) you want to use
DriverManager::loadDriver(\BotMan\Drivers\Twilio\TwilioMessageDriver::class); // Twilio driver
DriverManager::loadDriver(WebDriver::class); // Web driver


// Create an instance
$botman = BotManFactory::create($config);

// Give the bot something to listen for.
$botman->hears('hello', function (BotMan $bot) {
    $bot->reply('never give up baby');
});



$botman->fallback(function($bot) {

   $bot->reply('dksd skjdf ksj fds jdf');

});

$botman->listen();

