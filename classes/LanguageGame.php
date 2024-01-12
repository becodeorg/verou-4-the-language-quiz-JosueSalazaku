<?php

class LanguageGame
{
    private array $words;
    private player $player;
    private Word $word;

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
        $this->word[] = new Word($frenchTranslation, $englishTranslation);
        }
    }

    public function selectRandomWord() {
        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate
        $this->word = $getRandomWords($this->words);
        $_SESSION['currentWord'] = $this->word;
    }   



    public function run(): void
    {
        // TODO: check for option A or B



        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        // TODO: generate a message for the user that can be shown

    }
}

echo "Hello world, just checking!";