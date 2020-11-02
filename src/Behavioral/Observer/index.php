<?php

use DesignePatternsInPHP\Behavioral\Observer\Observer1;
use DesignePatternsInPHP\Behavioral\Observer\Observer2;
use DesignePatternsInPHP\Behavioral\Observer\Subject;

require __DIR__ . './../../../vendor/autoload.php';


$subject = new Subject();
$observer1 = new Observer1();

$subject->attach($observer1);
$subject->notify();

echo "<br> <br> <br>";

$observer2 = new Observer2();
$subject->attach($observer2);


$subject->notify();

