<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/28/21
 * Time: 8:48 PM
 */

class Article
{
    public function getTitle()
    {
        return "Article title";
    }

    public function getDate()
    {
        return "28.11.2021";
    }

    public function getContent()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }

    public function formatJson()
    {
        return json_encode($this->getContent());
    }
}

// Refactored

class Article
{
    public function getTitle()
    {
        return "Article title";
    }

    public function getDate()
    {
        return "28.11.2021";
    }

    public function getContent()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }
}


interface ArticleFormattable
{
    public function format(Article $article);
}

class JsonArticleFormatter implements ArticleFormattable
{
    public function format(Article $article)
    {
        return json_encode($article->getContents());
    }
}