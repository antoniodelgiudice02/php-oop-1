<?php

class Production
{
    public $title;
    public $language;
    public $vote;

    public function __construct($title, $language, $vote){
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }
}

$goodfellas = new Production('Good Fellas', 'En', '10');

var_dump( $goodfellas );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1></h1>
    
</body>
</html>