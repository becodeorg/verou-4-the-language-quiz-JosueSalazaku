<?php

class Word
{
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)
    public string $word;
    public string $answer;

    public function __construct($word, $answer) {
        $this->word = $word;
        $this->answer = $answer;
    }

    public function verify(string $userAnswer): bool
    {
        // Step 1: Case-insensitive comparison
        $isCaseInsensitiveMatch = strcasecmp($userAnswer, $this->answer) === 0;
    
        // Bonus: allow answers with different casing
        if ($isCaseInsensitiveMatch) {
            return true; // The answer is correct (case-insensitive match)
        }
    
        // Step 2: Small typo tolerance (Bonus - Hard)
        $levenshteinDistance = levenshtein($userAnswer, $this->answer);
        $isSmallTypoMatch = $levenshteinDistance <= 1;
    
        return $isSmallTypoMatch;
    }
    
}

echo "Hello WORD!";