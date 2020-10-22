<?php

namespace DesignePatternsInPHP\Structural\Facade;

class Client
{
    /**
     * @var Facade
     */
    private $facade;

    public function __construct(Facade $facade)
    {
        $this->facade = $facade;
    }

    public function operateSubsystems()
    {
        $this->facade->operation();
    }
}