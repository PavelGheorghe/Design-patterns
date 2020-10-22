<?php

use DesignePatternsInPHP\Structural\Facade\Client;
use DesignePatternsInPHP\Structural\Facade\Facade;
use DesignePatternsInPHP\Structural\Facade\Subsystem1;
use DesignePatternsInPHP\Structural\Facade\Subsystem2;

require __DIR__ . './../../../vendor/autoload.php';

$facade = new Facade(new Subsystem1(), new Subsystem2());
$client = new Client($facade);

$client->operateSubsystems();
