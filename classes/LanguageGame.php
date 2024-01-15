<?php

class LanguageGame
{
    private array $words;
    private Player $player;
    private Word $word;

    public function __construct()
    {
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            $this->words[] = new Word($frenchTranslation, $englishTranslation);
        }
    }

    public function selectRandomWord() {
        $this->word = $this->words[rand(0, count($this->words) - 1)];
        $_SESSION['currentWord'] = $this->word;
    }

    public function run(): void
    {
        session_start();

        // Option A: user visits site first time (or wants a new word)
        if (!isset($_SESSION['player'])) {
            // Handle the case when the user needs to provide a nickname
            // You might want to redirect the user to a nickname input form
            if (!isset($_POST["nickname"])) {
                $_SESSION['message'] = "Please provide a nickname.";
            } else {
                $this->player = new Player($_POST["nickname"]);
                $_SESSION['player'] = $this->player;
                $this->selectRandomWord();
            }
        } else {
            // Option B: user has just submitted an answer


            if (isset($_POST["reset"])) {
                $this->player->resetScore();
                $_SESSION["message"] = "The score has been reset!";
            } elseif (isset($_POST["new"])) {
                $this->selectRandomWord();
            } elseif (isset($_POST["translationBar"])) {
                // Option B: user has just submitted an answer
                $word = $_SESSION["currentWord"];
                $answer = $_POST["translationBar"];

                // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first

                $isCorrect = $word->verify($answer);

                // TODO: generate a message for the user that can be shown
                $_SESSION["message"] = $isCorrect ? "Correct! Well done!" : "Oops! Incorrect answer. Try again.";
            }
        }
    }
}

echo "Hello world, just checking!";
