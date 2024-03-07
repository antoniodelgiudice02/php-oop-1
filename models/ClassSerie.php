<?php

require_once __DIR__ . '/ClassProduction.php';
class Serie extends Production
{
    public int $seasons;

    public function __construct($title, $original_title, $language, $vote, $genre, $seasons,)
    {
        parent::__construct($title, $original_title, $language, $vote, $genre, );
        $this->seasons = $seasons;
    }
}
?>