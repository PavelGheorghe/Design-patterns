<?php


namespace DesignePatternsInPHP\Structural\Composite;


class Song implements MusicInterface
{
    private $name;
    private $singer;
    private $filePath;

    public function __construct(
        string $name,
        string $singer,
        string $filePath
    ){
        $this->name = $name;
        $this->singer = $singer;
        $this->filePath = $filePath;
    }


    public function play()
    {
        echo $this->name .' sung by ' . $this->singer . ' from ' . $this->filePath;
    }
}