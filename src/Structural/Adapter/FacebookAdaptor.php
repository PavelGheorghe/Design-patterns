<?php


namespace DesignePatternsInPHP\Structural\Adapter;


class FacebookAdaptor implements  SocialMediaAdaptorInterface
{

    private $facebook;

    public function __construct(Facebook $facebook)
    {
        $this->facebook = $facebook;
    }

    public function post(string $msg)
    {
       $this->facebook->postToWall($msg);
    }
}