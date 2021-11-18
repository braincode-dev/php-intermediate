<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="//getbootstrap.com/docs/4.6/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Module 3</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
        <div class="form">
            <form action="/src/module3/action.php" method="post">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Type your text here...</label>
                    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <?php  if($_SESSION['error']):?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Увага!</strong> Поле тексту не може бути пустим.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif ?>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>

        <div class="row">
            <?php if(!$_SESSION['error']):?>
                <div class="col-md-12 mb-4">
                    <p class="text-center text-success">Your text: <strong><?=$_SESSION['text']?></strong></p>
                </div>

                <div class="col-md-6 mb-4">
                    <p class="text-center text-black-50">Reserved text: <strong><?=$_SESSION['reversedText']?></strong></p>
                </div>

                <div class="col-md-6 mb-4">
                    <p class="text-center text-black-50">Reserved word: <strong><?=$_SESSION['reversedWord']?></strong></p>
                </div>

                <div class="col-md-3 mb-3">
                    <p>Number of characters: <span class='text-black-50 mb-0'><?=$_SESSION['numberOfCharacters']?></span></p>
                </div>

                <div class="col-md-3 mb-3">
                    <p>Number of words: <span class='text-black-50 mb-0'><?=$_SESSION['numberOfWords']?></span></p>
                </div>

                <div class="col-md-3 mb-3">
                    <p>Number of sentences: <span class='text-black-50 mb-0'><?=$_SESSION['numberOfSentences']?></span></p>
                </div>

                <div class="col-md-3 mb-3">
                    <p>Number of palindrome words: <span class='text-black-50 mb-0'><?=$_SESSION['palindromeWords']?></span></p>
                </div>

                <div class="col-md-3 mb-3">
                    <p>Average word length: <span class='text-black-50 mb-0'><?=$_SESSION['averageWordLength']?></span></p>
                </div>

                <div class="col-md-3 mb-3">
                    <p>The average number of words in a sentence: <span class='text-black-50 mb-0'><?=$_SESSION['averageNumberOfWords']?></span></p>
                </div>

                <div class="col-md-3 mb-3">
                    <p>Frequency of characters:</p>
                    <?php foreach ($_SESSION['frequencyOfCharacters'] as $letter => $frequency)
                        echo "<p class='text-black-50 mb-0'>Character " . chr($letter) . " appears $frequency times</p>";?>
                </div>

                <div class="col-md-3 mb-3">
                    <p>Distribution of characters as a percentage of total:</p>
                    <?php $countLetters = $_SESSION['distributionPercentage']['countLetters'];?>
                    <?php foreach ($_SESSION['distributionPercentage']['letters'] as $letter => $total):?>
                        <p class='text-black-50 mb-0'><?=$letter . " : " . $total . " : " . round(($total / $countLetters * 100), 2) ?> %</p>
                    <?php endforeach ?>
                </div>

                <div class="col-md-3 mb-3">
                    <p>Top 10 most used words:</p>
                    <?php foreach ($_SESSION['topMostUsedWords'] as $key => $word):?>
                        <p class='text-black-50 mb-0'><?= sprintf("Word <strong>%s</strong> use <strong>%s</strong> times", $key, $word)?></p>
                    <?php endforeach;?>
                </div>

                <div class="col-md-3 mb-3">
                    <p>Top 10 longest words:</p>
                    <?php foreach ($_SESSION['topLongestWords'] as $key => $item):?>
                        <?php if ($key < 10):?>
                        <p class='text-black-50 mb-0'><?= sprintf("Word <strong>%s</strong> have <strong>%s</strong> characters", $item['word'], $item['characters'])?></p>
                        <?php endif?>
                    <?php endforeach;?>
                </div>

                <div class="col-md-3 mb-3">
                    <p>Top 10 shortest words:</p>
                    <?php foreach ($_SESSION['topShortestWords'] as $key => $item):?>
                        <?php if ($key < 10):?>
                        <p class='text-black-50 mb-0'><?= sprintf("Word <strong>%s</strong> have <strong>%s</strong> characters", $item['word'], $item['characters'])?></p>
                        <?php endif?>
                    <?php endforeach;?>
                </div>

                <div class="col-md-5 mb-3">
                    <p>Is the whole text a palindrome? : </p>
                    <p class='text-black-50 mb-0'><?=$_SESSION['isPalindromeString']?></p>
                </div>

            <?php endif?>
        </div>
    </div>
</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
-->
</body>
</html>