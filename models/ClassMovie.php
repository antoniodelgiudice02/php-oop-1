<?php

require_once __DIR__ . '/ClassProduction.php';
class Movie extends Production
{
    public int $profitti;
    public int $durata;

    public function __construct($title, $original_title, $language, $vote, $genre, $profitti, $durata)
    {
        parent::__construct($title, $original_title, $language, $vote, $genre, );
        $this->profitti = $profitti;
        $this->durata = $durata;
    }

    public function getProfitti(){
        return '$'.$this->profitti;
    }

    public function getDurata(){
        return $this->durata . "' min";
    }
}
?>