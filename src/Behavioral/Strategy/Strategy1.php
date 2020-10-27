<?php

namespace DesignePatternsInPHP\Behavioral\Strategy;

class Strategy1 implements StrategyInterface
{

    function runStrategy()
    {
        echo 'Strategy 1 is running...<br>';
    }
}