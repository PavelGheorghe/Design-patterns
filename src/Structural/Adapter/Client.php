<?php


namespace DesignePatternsInPHP\Structural\Adapter;


class Client
{
    /**
     * @var SocialMediaAdaptorInterface
     */
    private $socialMediaAdaptor;

    public function __construct(SocialMediaAdaptorInterface $socialMediaAdaptor)
    {
        $this->socialMediaAdaptor = $socialMediaAdaptor;
    }

    public function posting(string $msg)
    {
        $this->socialMediaAdaptor->post($msg);
    }
}