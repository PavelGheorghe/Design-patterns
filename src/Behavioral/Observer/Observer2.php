<?php

namespace DesignePatternsInPHP\Behavioral\Observer;

class Observer2 implements \SplObserver
{

    /**
     * @inheritDoc
     */
    public function update(\SplSubject $subject)
    {
        echo "Observer 2 is updated";
    }
}