<?php

class Player
{

    public string $name;
    public int $score;

    public function __construct($name)
    {
        
        $this->name = $name . "👤";
        $this->score = 0;

    }

    public function resetScore() {
        $this->score = 0;
    }
}

echo "Hello Player <br>";
$player = new Player("John");
echo $player->name;  
echo $player->score; 

$player->resetScore();
echo $player->score; 