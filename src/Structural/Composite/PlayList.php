<?php


namespace DesignePatternsInPHP\Structural\Composite;


class PlayList implements MusicInterface
{
    private $songs = [];
    private $currentSong = 0;

    public function __construct(){}


    public function addSong(Song $song){
        array_push($this->songs, $song);
    }

    public function nextSong(){
        if (array_key_exists($this->currentSong + 1 , $this->songs)){
            $this->currentSong ++;

        }

        $this->play();
    }

    public function play()
    {
        $this->songs[$this->currentSong]->play();
    }
}