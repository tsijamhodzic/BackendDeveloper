<?php

if (!empty($_POST)) {
    $word = $_POST['Word'] ?? null;

    try {
        validate($word);

        $vowelCount = countVowels($word);
        $consonantCount = countConsonants($word);
        $lettersCount = countLetters($word);

        $wordsJson = file_get_contents('words.json');
        $words = json_decode($wordsJson, true);

        if ($words === null) {
            $words = [];
        }

        $words[] = [
            'rijec' => $word,
            'broj_slova' => $lettersCount,
            'broj_suglasnika' => $consonantCount,
            'broj_samoglasnika' => $vowelCount,
        ];

        $wordsJson = json_encode($words);
        file_put_contents('words.json', $wordsJson);
    } catch (Exception $exception) {
        $errorMessage = $exception->getMessage();
    }
}

function validate(string $word): void
{
    if (empty($word)) {
        throw new Exception('Riječ je prazna. Unesite riječ.');
    }
}

function countLetters($word): int
{
    $word = strtolower($word);
    $letterCount = 0;

    for ($i = 0; $i < strlen($word); $i++) {
        $letterCount++;
    }

    return $letterCount;
}

function countVowels($word): int
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $word = strtolower($word);
    $vowelCount = 0;

    for ($i = 0; $i < strlen($word); $i++) {
        if (in_array($word[$i], $vowels)) {
            $vowelCount++;
        }
    }

    return $vowelCount;
}

function countConsonants($word): int
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $word = strtolower($word);
    $consonantCount = 0;

    for ($i = 0; $i < strlen($word); $i++) {
        if (!in_array($word[$i], $vowels)) {
            $consonantCount++;
        }
    }

    return $consonantCount;
}

require_once 'obrazacWords.html';