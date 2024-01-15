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
        
    }
}

echo "Hello Player";