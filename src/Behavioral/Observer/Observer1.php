<?php

namespace DesignePatternsInPHP\Behavioral\Observer;

class Observer1 implements \SplObserver
{

    /**
     * @inheritDoc
     */
    public function update(\SplSubject $subject)
    {
        echo "Observer 1 is updated<br>";
    }
}