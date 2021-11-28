<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/16/21
 * Time: 8:52 PM
 */

namespace CodeCamp\module3;


class TextAnalyzer
{
    public $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function numberOfCharacters()
    {
        return strlen($this->text);
    }

    public function numberOfWords()
    {
        return str_word_count($this->text);
    }

    public function numberOfSentences()
    {
        return preg_match_all('/[^\s](\.|\!|\?)(?!\w)/', $this->text, $match);
    }

    public function frequencyOfCharacters()
    {
        $chart = count_chars($this->text, 1);
        return $chart;

    }

    public function distributionPercentage()
    {
        $text = str_replace(' ', '', $this->text);
        $arrLetters = str_split($text);
        $countLetters = count($arrLetters);

        $letters = [];

        foreach ($arrLetters as $letter) {
            if (isset($letters[$letter])) {
                $letters[$letter] += 1;
            } else {
                $letters[$letter] = 1;
            }
        }

        return $letters = [
            'letters' => $letters,
            'countLetters' => $countLetters,
        ];
    }

    public function averageWordLength()
    {
        $characters = strlen($this->text);
        $words = str_word_count($this->text, 1);
        $words = count($words);

        return $characters / $words;
    }

    public function averageNumberOfWords()
    {
        $words = str_word_count($this->text, 1);
        $words = count($words);
        $sentence = preg_match_all('/[^\s](\.|\!|\?)(?!\w)/', $this->text, $match);

        return $words / $sentence;
    }

    public function topMostUsedWords($stop_words = [])
    {
        $string = strtolower($this->text);

        $words = str_word_count($string, 1);
        $words = array_diff($words, $stop_words);
        $words = array_count_values($words);
        arsort($words);

        $words = array_slice($words, 0, 10);
        return $words;
    }

    public function topLongestWords()
    {
        $words = explode(' ', $this->text);
        $results = [];

        foreach ($words as $word) {
            $results[] = [
                'word' => $word,
                'characters' => strlen($word),
            ];
        }

        usort
        (
            $results,
            create_function
            (
                '$a,$b',
                'return -($a["characters"] - $b["characters"]);',
                )
        );

        return $results;
    }

    public function topShortestWords()
    {
        $words = explode(' ', $this->text);
        $results = [];

        foreach ($words as $word) {
            $results[] = [
                'word' => $word,
                'characters' => strlen($word),
            ];
        }

        usort($results, function($a, $b){
            return ($a['characters'] - $b['characters']);
        });

        return $results;
    }

    public function palindromeWords()
    {
        $words = explode(' ', $this->text);
        $count = 0;

        foreach($words as $word) {
            if(strrev($word) === $word) {
                $count++;
            }
        }

        return $count;
    }

    public function topPalindromeWords()
    {
        $l = 0;
        $r = strlen($this->text) - 1;
        $flag = 0;

        while($r > $l){
            if ($this->text[$l] != $this->text[$r]){
                $flag = 1;
                break;
            }
            $l++;
            $r--;
        }

        if ($flag == 0){
            $this->topLongestWords();
        } else {
            return sprintf("Text <strong>%s</strong> is not a Palindrome string", $this->text);
        }
    }

    public function isPalindromeString()
    {
        $l = 0;
        $r = strlen($this->text) - 1;
        $flag = 0;

        while($r > $l){
            if ($this->text[$l] != $this->text[$r]){
                $flag = 1;
                break;
            }
            $l++;
            $r--;
        }

        if ($flag == 0){
            return sprintf("Text <strong>%s</strong> is a Palindrome string", $this->text);
        } else {
            return sprintf("Text <strong>%s</strong> is not a Palindrome string", $this->text);
        }
    }

    public function reversedText()
    {
        return strrev($this->text);
    }

    public function reversedWord()
    {
        $words = explode(' ', $this->text);
        $words = array_reverse($words);
        $words = implode(" ",$words);

        return $words;
    }
}