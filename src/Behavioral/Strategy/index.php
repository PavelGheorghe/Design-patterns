<?php

use DesignePatternsInPHP\Behavioral\Strategy\Context;
use DesignePatternsInPHP\Behavioral\Strategy\Strategy1;
use DesignePatternsInPHP\Behavioral\Strategy\Strategy2;

require __DIR__.'./../../../vendor/autoload.php';

$strategy1 = new Strategy1();

$context = new Context($strategy1);

$context->runContextAction();

$strategy2 = new Strategy2();

$context->setStrategy($strategy2);

$context->runContextAction();


