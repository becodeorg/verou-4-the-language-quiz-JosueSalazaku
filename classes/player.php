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


$player = new Player("");

echo "Player Name: " . $player->name . "<br>";
echo "Player Score: " . $player->score . "<br>";

$player->resetScore();
echo "Player Score after Reset: " . $player->score . "<br>";