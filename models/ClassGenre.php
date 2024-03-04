<?php
class Genre
{
    public string $genre;
    public string $description;

    public function __construct($genre, $description)
    {
        $this->genre = $genre;
        $this->description = $description;
    }

}
?>