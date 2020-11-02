<?php

namespace DesignePatternsInPHP\Behavioral\Observer;


class Subject implements  \SplSubject
{

    private $subscribers;

    public function __construct()
    {
        $this->subscribers = new \SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function attach(\SplObserver $observer)
    {
        $this->subscribers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(\SplObserver $observer)
    {
           $this->subscribers->detach($observer);
    }

    /**
     * @inheritDoc
     */
    public function notify()
    {
         foreach ($this->subscribers as $subscriber){
             $subscriber->update($this);
         }
    }
}