<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

use CodeCamp\module3\TextAnalyzer;

include '../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

$text = $_POST['text'];

if(empty($text)){
    session_unset();
    $_SESSION['error'] = true;
    header('Location: ./index.php');
    die();
}
$_SESSION['error'] = false;

$data = new TextAnalyzer($text);
$_SESSION['text'] = $text;
$_SESSION['numberOfCharacters'] = $data->numberOfCharacters();
$_SESSION['numberOfWords'] = $data->numberOfWords();
$_SESSION['numberOfSentences'] = $data->numberOfSentences();
$_SESSION['frequencyOfCharacters'] = $data->frequencyOfCharacters();
$_SESSION['distributionPercentage'] = $data->distributionPercentage();
$_SESSION['averageWordLength'] = $data->averageWordLength();
$_SESSION['averageNumberOfWords'] = $data->averageNumberOfWords();
$_SESSION['topMostUsedWords'] = $data->topMostUsedWords();
$_SESSION['topLongestWords'] = $data->topLongestWords();
$_SESSION['topShortestWords'] = $data->topShortestWords();
$_SESSION['palindromeWords'] = $data->palindromeWords();
$_SESSION['topPalindromeWords'] = $data->topPalindromeWords();
$_SESSION['isPalindromeString'] = $data->isPalindromeString();
$_SESSION['reversedText'] = $data->reversedText();
$_SESSION['reversedWord'] = $data->reversedWord();


header('Location: ./index.php');
