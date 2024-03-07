<?php

require_once __DIR__ . '/ClassGenre.php';
require_once __DIR__ . '/ClassMovie.php';
class Production
{
    public string $title;
    public string $original_title;
    public string $language;
    public int $vote;
    public Genre $genre;

    public function __construct($title, $original_title, $language, $vote, $genre)
    {
        $this->title = $title;
        $this->original_title = $original_title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;
    }

    public function getTitles(){
        return $this->title . ' / ' . $this->original_title;
    }

    public function getGenre(){
        return $this->genre->genre . '. ' . $this->genre->description;
    }
}
?>