<?php

use DesignePatternsInPHP\Structural\Composite\PlayList;
use DesignePatternsInPHP\Structural\Composite\Song;

require __DIR__ . './../../../vendor/autoload.php';


$playList = new PlayList();
$playList->addSong(new Song('Apologize', 'OneRepublic', '/public/music/apologize-onerepublic.mp3'));
$playList->addSong(new Song('Rockstar', 'Spike', '/public/music/rockstar-spike.mp3'));
$playList->addSong(new Song('Secret', 'OneRepublic', '/public/music/apologize-secret.mp3'));

$playList->play();
$playList->nextSong();
