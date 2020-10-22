<?php


use DesignePatternsInPHP\Structural\Adapter\Client;
use DesignePatternsInPHP\Structural\Adapter\Facebook;
use DesignePatternsInPHP\Structural\Adapter\FacebookAdaptor;

require __DIR__ . './../../../vendor/autoload.php';


$facebook = new Facebook();
$socialMediaAdaptor = new FacebookAdaptor($facebook);
$client = new Client($socialMediaAdaptor);

$client->posting('My First post on social media channel');