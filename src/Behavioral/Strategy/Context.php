<?php

namespace DesignePatternsInPHP\Behavioral\Strategy;

class Context
{
    /**
     * @var StrategyInterface
     */
    private $strategy;

    public function __construct(StrategyInterface $strategy ){
       $this->strategy = $strategy;
   }

   public function setStrategy(StrategyInterface $strategy){
       $this->strategy = $strategy;
   }

   public function runContextAction(){
        $this->strategy->runStrategy();
   }

}