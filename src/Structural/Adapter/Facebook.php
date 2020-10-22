<?php

namespace DesignePatternsInPHP\Structural\Adapter;


class Facebook
{
    public function postToWall(string $msg)
    {
        echo "Posting message....> " . $msg;
    }
}