<?php
class Production
{
    public string $title;
    public string $original_title;
    public string $language;
    public int $vote;

    public function __construct($title, $original_title, $language, $vote)
    {
        $this->title = $title;
        $this->original_title = $original_title;
        $this->language = $language;
        $this->vote = $vote;
    }

    public function getTitles(){
        return $this->title . ' / ' . $this->original_title;
    }
}
?>